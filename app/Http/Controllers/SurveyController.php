<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Carbon\Carbon;
use App\Survey;
use App\EventCategory;
use App\LifeEvent;
use App\TimelineEvent;
use App\Demographics;
use App\Orientation;
use App\FamilyBackground;
use App\FamilyBackgroundFollowup;
use App\Education;
use App\WorkHousing;
use App\WorkHousingFollowup;
use App\SocialRelationships;
use App\CriminalJustice;
use App\CriminalJusticeFollowup;
use App\Exploitation;
use App\ExploitationFollowup;
use App\Services;
use App\ServicesFollowup;
use App\FinalQuestions;

class SurveyController extends Controller
{
    // Helper function to sync life events for an event category
    public function SyncLifeEventsForCategory (Survey $survey, string $category, $addLifeEventIds)
    {
        // Clear any previously set life events for this category
        $eventCategory = EventCategory::where('category', $category)->first();
        $categoryLifeEvents = $eventCategory->life_events()->pluck('id')->toArray();
        $survey->life_events()->detach($categoryLifeEvents);

        // Sync up any checked life events from survey
        $survey->life_events()->syncWithoutDetaching($addLifeEventIds);
    }

    public function postScreening (Request $request)
    {
    		// Initial creation of this survey
        $survey = new Survey;
        $survey->screening_18_or_older = $request->input('age_18_or_older');
        $survey->screening_identify_as_candidate = $request->input('identify_as_candidate');
        $survey->started_at = Carbon::now();

        if (strtolower($request->input('age_18_or_older')) == "no"
            || strtolower($request->input('identify_as_candidate')) == "no"
            || (empty($request->input('age_18_or_older')) && empty($request->input('identify_as_candidate'))))
        {
            $survey->finished_at = Carbon::now();
            $survey->save();

            return view('survey.not-eligible');
        }

        $survey->save();
        $survey_id = $survey->id;
        $survey_code_prefix = date('ymd', strtotime($survey->started_at));
        $survey->survey_code = $survey_code_prefix . '-' . sprintf('%04d', $survey_id);
        $survey->save();

        // Save survey and survey_id to current session
        session([ 'survey' => $survey, 'survey_id' => $survey_id ]);

        return redirect()->route('survey.consent');
    }

    public function getConsent()
    {
        $survey = session('survey');
        //$survey_id = session('survey_id');

        return view('survey.consent', ['survey' => $survey]);
    }

    public function postConsent (Request $request)
    {
        $consent = $request->input('consent');

        // Update survey consent status
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $survey->consent = $consent;
        $survey->save();

        if (strtolower($consent) != "yes")
        {
            $survey->finished_at = date('Y-m-d H:m:s');
            $survey->save();

            return redirect()->route('survey.referral');
        }

        return redirect()->route('survey.thankyou-for-participating');
    }

    public function postDemographics(Request $request)
    {
        $survey_id = session('survey_id');

        $demographics = new Demographics;
        $demographics->survey_id = $survey_id;
        $demographics->gender = $request->input('gender');
        $demographics->gender_self_describe = $request->input('gender_self_describe');
        $demographics->state_residence = $request->input('current_state_of_residence');
        $demographics->race_ethnicity = $request->input('race_ethnicity');
        $demographics->race_other = $request->input('race_other');
        $demographics->born_in_us = $request->input('bornInUnitedStates');
        $demographics->born_where = $request->input('bornWhere');
        $demographics->how_long_lived_in_us = $request->input('howLongInUS');
        $demographics->brought_to_us_by_trafficker = $request->input('broughtToUsByTrafficker');
        if(!empty($request->input('identifyAs'))) { $demographics->identify_as = implode(", ", $request->input('identifyAs')); }
        $demographics->describe_becoming_legal_adult = $request->input('describe_becoming_legal_adult');
        $demographics->save();

        return redirect()->route('survey.timeline-description');
    }

    public function postOrientationQuestions(Request $request)
    {
        $survey_id = session('survey_id');

        // Clear any existing Orientation answers for this survey
        Orientation::where('survey_id', $survey_id)->delete();

        $orientation = new Orientation;
        $orientation->survey_id = $survey_id;
        $orientation->year_born = $request->input('year_born');
        $orientation->age_started_living_on_own = $request->input('age_started_living_on_own');
        $orientation->highest_grade_completed = $request->input('highest_grade_completed');
        $orientation->how_old_when_completed_school = $request->input('how_old_when_completed_school');
        $orientation->childhood_event_description = $request->input('childhood_event_description');
        $orientation->childhood_event_age = $request->input('childhood_event_age');
        $orientation->adolescence_event_description = $request->input('adolescence_event_description');
        $orientation->adolescence_event_age = $request->input('adolescence_event_age');
        $orientation->adulthood_event_description = $request->input('adulthood_event_description');
        $orientation->adulthood_event_age = $request->input('adulthood_event_age');
        $orientation->save();

        return redirect()->route('timeline.orientation');
    }

    public function getFamilyBackground()
    {
        $category = EventCategory::where('category', 'Family Background')->first();

        return view('survey.family-background', [ 'lifeEvents' => $category->life_events ]);
    }

    public function postFamilyBackground(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Family Background";
        $inputFieldName = 'family_background_events';

        $this->SyncLifeEventsForCategory($survey, $category, $request->input($inputFieldName));
/*
        // Clear any previously set life events for this category
        $category = "Family Background";
        $eventCategory = EventCategory::where('category', $category)->first();
        $categoryLifeEvents = $eventCategory->life_events()->pluck('id')->toArray();
        $survey->life_events()->detach($categoryLifeEvents);

        // Sync up any checked life events from survey
        $survey->life_events()->syncWithoutDetaching($request->input('family_background_events'));
*/

        $familyBackground = new FamilyBackground;
        $familyBackground->survey_id = $survey_id;
        $parent_or_adult_often = $request->input('parent_or_adult_often');
      	if (!empty($parent_or_adult_often)) {
      				$familyBackground->parent_or_adult_often = implode(", ", $parent_or_adult_often);
            // If ($request->input('parent_or_adult_often') contains either event string,
            //  Then add the life_event for "Experienced verbal abuse"
            if (in_array("Swear at/insult/putdown/humiliate", $parent_or_adult_often)
                    || in_array("Affraid physically hurt", $parent_or_adult_often))
            {
                $experienced_verbal_abuse = \App\LifeEvent::where('event', 'Experienced verbal abuse')->first();
                $survey->life_events()->attach($experienced_verbal_abuse);
            }
            //  Then add the life_event for "Experienced physical abuse"
            if (in_array("Push/slap/grab/throw something", $parent_or_adult_often)
                    || in_array("Hit so hard marks or injured", $parent_or_adult_often))
            {
                $experienced_verbal_abuse = \App\LifeEvent::where('event', 'Experienced physical abuse')->first();
                $survey->life_events()->attach($experienced_verbal_abuse);
            }
      	}
        $adult_or_person_5_years_older_ever = $request->input('adult_or_person_5_years_older_ever');
     	if (!empty($adult_or_person_5_years_older_ever)) {
      				$familyBackground->adult_or_person_5_years_older_ever = implode(", ", $adult_or_person_5_years_older_ever);
            // If ($request->input('adult_or_person_5_years_older_ever') contains either event string,
            //  Then add the life_event for "Experienced sexual abuse"
            if (in_array("Touch/fondle/have touch in sexaul way", $adult_or_person_5_years_older_ever)
                    || in_array("Try or actually have sex", $adult_or_person_5_years_older_ever))
            {
                $experienced_physical_abuse = \App\LifeEvent::where('event', 'Experienced sexual abuse')->first();
                $survey->life_events()->attach($experienced_physical_abuse);
            }
        }
      	if (!empty($request->input('often_feel_that'))) {
                $familyBackground->often_feel_that = implode(", ", $request->input('often_feel_that'));
      	}
        $witnessedViolence = false;
      	if (!empty($request->input('mother_or_stepmother'))) {
                $familyBackground->mother_or_stepmother = implode(", ", $request->input('mother_or_stepmother'));
                $witnessedViolence = true;
      	}
        if (!empty($request->input('father_or_stepfather'))) {
                $familyBackground->father_or_stepfather = implode(", ", $request->input('father_or_stepfather'));
                $witnessedViolence = true;
      	}
        if ($witnessedViolence) {
            // If ($request->input('mother_or_stepmother' or ($request->input('father_or_stepfather') contains anything,
            //  Then add the life_event for "Witnessed violence at home"
            $experienced_physical_abuse = \App\LifeEvent::where('event', 'Witnessed violence at home')->first();
            $survey->life_events()->attach($experienced_physical_abuse);
        }
        //$familyBackground->other_family_events = $request->input('other_family_events');
        $familyBackground->save();

        return redirect()->route('survey.family-background-timeline');
    }

    public function postFamilyBackgroundFollowup(Request $request)
    {
        $survey_id = session('survey_id');

        $familyBackgoundFollowup = new FamilyBackgroundFollowup;
        $familyBackgoundFollowup->survey_id = $survey_id;
        if(!empty($request->input('turned_to_for_support'))) $familyBackgoundFollowup->turned_to_for_support = implode(", ", $request->input('turned_to_for_support'));
        $familyBackgoundFollowup->turned_to_for_support_other = $request->input('turned_to_for_support_other');
        $familyBackgoundFollowup->foster_care_places_lived = $request->input('foster_care_places_lived');
        $familyBackgoundFollowup->positive_foster_placements = $request->input('positive_foster_placements');
        $familyBackgoundFollowup->how_many_positive_foster_placements = $request->input('how_many_positive_foster_placements');
        //$familyBackgoundFollowup->positive_foster_placements_description = $request->input('positive_foster_placements_description');
        $familyBackgoundFollowup->negative_foster_placements = $request->input('negative_foster_placements');
        $familyBackgoundFollowup->how_many_negative_foster_placements = $request->input('how_many_negative_foster_placements');
        //$familyBackgoundFollowup->negative_foster_placements_description = $request->input('negative_foster_placements_description');
        $familyBackgoundFollowup->reason_left_foster_care = $request->input('reason_left_foster_care');
        $familyBackgoundFollowup->reason_left_foster_care_other = $request->input('reason_left_foster_care_other');
        $familyBackgoundFollowup->option_to_sign_back_in_when_18 = $request->input('option_to_sign_back_in_when_18');
        $familyBackgoundFollowup->signed_back_in_when_18 = $request->input('signed_back_in_when_18');
        $familyBackgoundFollowup->sign_back_in_decision_factors = $request->input('sign_back_in_decision_factors');
        $familyBackgoundFollowup->role_leaving_foster_care_had = $request->input('role_leaving_foster_care_had');
        $familyBackgoundFollowup->save();

        return redirect()->route('survey.education');
    }

    public function getEducation()
    {
        $category = EventCategory::where('category', 'Education')->first();

        return view('survey.education', [ 'lifeEvents' => $category->life_events ]);
    }

    public function postEducation(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Education";
        $inputFieldName = 'education_events';
        
        $this->SyncLifeEventsForCategory($survey, $category, $request->input($inputFieldName));

        $education = new Education;
        $education->survey_id = $survey_id;
        if (!empty($request->input('education_events'))) $education->events = implode(", ", $request->input('education_events'));
        //$education->other_events = $request->input('other_education_events');
        $education->save();

        return redirect()->route('survey.education-timeline');
    }

    // Work/Housing controllers with timeline and followup questions

    public function getWorkHousing()
    {
    		$category = EventCategory::where('category', 'Work Housing')->first();

    		return view('survey.work-housing', [ 'lifeEvents' => $category->life_events ]);
    }

    public function postWorkHousing(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Work Housing";
        $inputFieldName = 'work_housing_events';
        
        $this->SyncLifeEventsForCategory($survey, $category, $request->input($inputFieldName));

        $workHousing = new WorkHousing;
        $workHousing->survey_id = $survey_id;
        if (!empty($request->input('work_housing_events'))) $workHousing->work_housing_events = implode(", ", $request->input('work_housing_events'));
        $workHousing->supported_by_trafficker = $request->input('supported_by_trafficker');
        //$workHousing->other_work_events = $request->input('other_work_events');
        $workHousing->save();

        return redirect()->route('survey.work-housing-timeline');
    }

    public function postWorkHousingFollowup(Request $request)
    {
        $survey_id = session('survey_id');

        $workHousingFollowup = new WorkHousingFollowup;
        $workHousingFollowup->survey_id = $survey_id;
        $workHousingFollowup->work_applied_for_outside_sex_trade = $request->input('work_applied_for_outside_sex_trade');
        $workHousingFollowup->age_applied_for_first_job = $request->input('age_applied_for_first_job');
        $workHousingFollowup->age_applied_for_first_job_as_adult = $request->input('age_applied_for_first_job_as_adult');
        $workHousingFollowup->save();

        return redirect()->route('survey.social-relationships');
    }

	// Social Relationships questions controller

    public function getSocialRelationships()
    {
        $category = EventCategory::where('category', 'Social Relationships')->first();

        return view('survey.social-relationships', [ 'lifeEvents' => $category->life_events ]);
    }

    public function postSocialRelationships(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Social Relationships";
        $inputFieldName = 'social_relationships_events';
        
        $this->SyncLifeEventsForCategory($survey, $category, $request->input($inputFieldName));

        $socialRelationships = new SocialRelationships;
        $socialRelationships->survey_id = $survey_id;
        if (!empty($request->input('social_relationships_events'))) $socialRelationships->social_relationship_events = implode(", ", $request->input('social_relationships_events'));
        $socialRelationships->times_married = $request->input('times_married');
        $socialRelationships->number_of_children = $request->input('number_of_children');
        $socialRelationships->tried_to_reconnect_experience = $request->input('tried_to_reconnect_experience');
        //$socialRelationships->other_social_relationship_events = $request->input('other_social_relationships_events');
        $socialRelationships->save();

        return redirect()->route('survey.social-relationships-timeline');
    }

    // Criminal Justice questions controller

    public function getCriminalJustice()
    {
        $category = EventCategory::where('category', 'Criminal Justice')->first();

        return view('survey.criminal-justice', [ 'lifeEvents' => $category->life_events ]);
    }

    public function postCriminalJustice(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Criminal Justice";
        $inputFieldName = 'criminal_justice_events';
        
        $this->SyncLifeEventsForCategory($survey, $category, $request->input($inputFieldName));

        $criminalJustice = new CriminalJustice;
        $criminalJustice->survey_id = $survey_id;
        if (!empty($request->input('criminal_justice_events'))) $criminalJustice->criminal_justice_events = implode(", ", $request->input('criminal_justice_events'));
        //$criminalJustice->other_criminal_justice_events = $request->input('other_criminal_justice_events');
        $criminalJustice->save();

        return redirect()->route('survey.criminal-justice-timeline');
    }

    public function postCriminalJusticeFollowup(Request $request)
    {
        $survey_id = session('survey_id');

        $criminalJusticeFollowup = new CriminalJusticeFollowup;
        $criminalJusticeFollowup->survey_id = $survey_id;
        $criminalJusticeFollowup->issues_because_of_criminal_record = $request->input('issues_because_of_criminal_record');
        $criminalJusticeFollowup->arrested_charges = $request->input('arrested_charges');
        $criminalJusticeFollowup->convicted_charges = $request->input('convicted_charges');
        $criminalJusticeFollowup->save();

        return redirect()->route('survey.exploitation');
    }

    // Exploitation questions controller

    public function getExploitation()
    {
		$category = EventCategory::where('category', 'Exploitation')->first();

        return view('survey.exploitation', [ 'lifeEvents' => $category->life_events ]);
    }

    public function postExploitation(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Exploitation";
        $inputFieldName1 = 'exploitation_events_group_1';
        $inputFieldName2 = 'exploitation_events_group_2';

        $this->SyncLifeEventsForCategory($survey, $category, $request->input($inputFieldName1));
        $survey->life_events()->syncWithoutDetaching($request->input($inputFieldName2));
  
        // Autofill age first sold sex in event timeline
        $first_sold_sex = \App\LifeEvent::where('field_name', 'age_first_sold_sex')->first();
        $survey->life_events()->attach($first_sold_sex);
        $newTimelineEvent = new TimelineEvent;
        $newTimelineEvent->survey_id = $survey_id;
        $newTimelineEvent->life_event_id = $first_sold_sex->id;
        $newTimelineEvent->timeframe = "Age";
        $newTimelineEvent->age = $request->input('age_first_sold_sex');
        $newTimelineEvent->save();

        // Autofill age last sold sex in event timeline
        $last_sold_sex = \App\LifeEvent::where('field_name', 'age_last_sold_sex')->first();
        $survey->life_events()->attach($last_sold_sex);
        $newTimelineEvent = new TimelineEvent;
        $newTimelineEvent->survey_id = $survey_id;
        $newTimelineEvent->life_event_id = $last_sold_sex->id;
        $newTimelineEvent->timeframe = "Age";
        $newTimelineEvent->age = $request->input('age_last_sold_sex');
        $newTimelineEvent->save();

        $exploitation = new Exploitation;
        $exploitation->survey_id = $survey_id;
        $exploitationEventsBuilder = "";
        if (!empty($request->input('exploitation_events_group_1'))) $exploitationEventsBuilder = implode(", ", $request->input('exploitation_events_group_1'));
        if (!empty($request->input('exploitation_events_group_2'))) $exploitationEventsBuilder = $exploitationEventsBuilder . ", " . implode(", ", $request->input('exploitation_events_group_2'));
        $exploitation->exploitation_events = $exploitationEventsBuilder;
        $exploitation->sold_sex_before_18 = $request->input('sold_sex_before_18');
        $exploitation->sold_sex_after_18 = $request->input('sold_sex_after_18');
        $exploitation->age_first_sold_sex = $request->input('age_first_sold_sex');
        $exploitation->age_last_sold_sex = $request->input('age_last_sold_sex');
        $exploitation->times_tried_to_leave_sex_trade = $request->input('times_tried_to_leave_sex_trade');
        $exploitation->returned_to_sex_trade = $request->input('returned_to_sex_trade');
        $exploitation->times_returned_to_sex_trade = $request->input('times_returned_to_sex_trade');
        //$exploitation->other_exploitation_events = $request->input('other_exploitation_events');
        $exploitation->save();

        return redirect()->route('survey.exploitation-timeline');
    }

    public function postExploitationFollowup(Request $request)
    {
        $survey_id = session('survey_id');

        $exploitationFollowup = new ExploitationFollowup;
        $exploitationFollowup->survey_id = $survey_id;
        $exploitationFollowup->first_instance_selling_sex = $request->input('first_instance_selling_sex');
        $exploitationFollowup->why_returned_to_sex_trade = $request->input('why_returned_to_sex_trade');
        $exploitationFollowup->how_take_care_of_self = $request->input('how_take_care_of_self');
        $exploitationFollowup->how_react_to_stressful_situation = $request->input('how_react_to_stressful_situation');
        $exploitationFollowup->save();

        return redirect()->route('survey.services');
    }

    // Services questions controller

    public function getServices()
    {
        $category = EventCategory::where('category', 'Services')->first();

        return view('survey.services', [ 'lifeEvents' => $category->life_events ]);
    }

    public function postServices(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Services";
        $inputFieldName = 'services_sought';
        
        $this->SyncLifeEventsForCategory($survey, $category, $request->input($inputFieldName));

        $services = new Services;
        $services->survey_id = $survey_id;
        $services->social_service_agency_reached_out = $request->input('social_service_agency_reached_out');
        $services->social_service_received = $request->input('social_service_received');
        $services->received_services_substance_abuse = $request->input('received_services_substance_abuse');
        $services->received_services_mental_health = $request->input('received_services_mental_health');
        $services->received_services_health_care_clinic = $request->input('received_services_health_care_clinic');
        $services->received_services_emergency_room = $request->input('received_services_emergency_room');
        $services->received_services_domestic_violence = $request->input('received_services_domestic_violence');
        $services->received_services_sexual_assault = $request->input('received_services_sexual_assault');
        $services->received_services_legal = $request->input('received_services_legal');
        $services->received_services_employment = $request->input('received_services_employment');
        $services->received_services_family = $request->input('received_services_family');
        $services->received_services_religious = $request->input('received_services_religious');
        $services->received_services_housing = $request->input('received_services_housing');
        $services->received_services_agency_help_exit_sex_trade = $request->input('received_services_agency_help_exit_sex_trade');
        $services->agency_help_exit_sex_trade = $request->input('agency_help_exit_sex_trade');
        $services->agency_help_exit_sex_trade_other = $request->input('agency_help_exit_sex_trade_other');
        $services->agency_helpful_exiting_sex_trade = $request->input('agency_helpful_exiting_sex_trade');
        //$services->other_services = $request->input('other_services');
        $services->save();

        return redirect()->route('survey.services-timeline');
    }

    public function postServicesFollowup(Request $request)
    {
        $survey_id = session('survey_id');

        $servicesFollowup = new ServicesFollowup;
        $servicesFollowup->survey_id = $survey_id;
        if (!empty($request->input('services_followup_events'))) $servicesFollowup->services_followup_events = implode(", ", $request->input('services_followup_events'));
        $servicesFollowup->explain_services_experiences = $request->input('explain_services_experiences');
        $servicesFollowup->save();

        return redirect()->route('survey.final-questions');
    }

    public function postFinalQuestions(Request $request)
    {
        $survey_id = session('survey_id');

        $finalQuestions = new FinalQuestions;
        $finalQuestions->survey_id = $survey_id;
        $finalQuestions->explain_becoming_legal_adult = $request->input('explain_becoming_legal_adult');
        $finalQuestions->want_society_to_know = $request->input('want_society_to_know');
        $finalQuestions->want_research_staff_to_know_about_answers = $request->input('want_research_staff_to_know_about_answers');
        $finalQuestions->save();

        return redirect()->route('survey.thankyou-giftcard');
    }

    public function getSurveyComplete()
    {
            $survey_id = session('survey_id');
            $survey = Survey::find($survey_id);

            $survey->finished_at = Carbon::now();
            $survey->save();

            return view('survey.survey-complete');
    }
}