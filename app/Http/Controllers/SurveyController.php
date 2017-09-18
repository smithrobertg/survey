<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Carbon\Carbon;
use App\Survey;
use App\EventCategory;
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
    public function getScreening()
    {
        return view('survey.screening');
    }

    public function postScreening (Request $request)
    {
    		// Initial creation of this survey
        $survey = new Survey;

        $survey->screening_18_or_older = $request->input('age_18_or_older');
        $survey->screening_identify_as_candidate = $request->input('identify_as_candidate');
        $survey->started_at = Carbon::now();

        if (strtolower($request->input('age_18_or_older')) == "no"
        || strtolower($request->input('identify_as_candidate')) == "no")
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

    public function getThankYouForParticipating()
    {
        $survey = session('survey');

        return view('survey.thankyou-for-participating', compact('survey'));
    }

    // Post not needed because view redirects straight to Demographics view
    /*
    public function postThankYouForParticipating (Request $request)
    {
        return redirect()->route('survey.demographics');
    }
    */

    public function getDemographics()
    {
        return view('survey.demographics');
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

        //$survey->demographics()->save($demographics);

        return redirect()->route('survey.timeline-description');
    }

    //
    public function getOrientationQuestions()
    {
        return view('survey.orientation-questions');
    }

    public function postOrientationQuestions(Request $request)
    {
        $survey_id = session('survey_id');

        $orientation = new Orientation;

        $orientation->survey_id = $survey_id;
        $orientation->year_born = $request->input('year_born');
        $orientation->age_started_living_on_own = $request->input('age_started_living_on_own');
        $orientation->highest_grade_completed = $request->input('highest_grade_completed');
        $orientation->how_old_when_completed_school = $request->input('how_old_when_completed_school');
        $orientation->childhood_event_description = $request->input('childhood_event_description');
        $orientation->childhood_event_age_or_year = $request->input('childhood_event_age_or_year');
        $orientation->adolescence_event_description = $request->input('adolescence_event_description');
        $orientation->adolescence_event_age_or_year = $request->input('adolescence_event_age_or_year');
        $orientation->adulthood_event_description = $request->input('adulthood_event_description');
        $orientation->adulthood_event_age_or_year = $request->input('adulthood_event_age_or_year');

        $orientation->save();

        return view('survey.timeline.orientation');
    }

    public function getFamilyBackground()
    {
        return view('survey.family-background');
    }

    public function postFamilyBackground(Request $request)
    {
        $survey_id = session('survey_id');

        $familyBackground = new FamilyBackground;

        $familyBackground->survey_id = $survey_id;
      	if (!empty($request->input('parent_or_adult_often'))) {
      				$familyBackground->parent_or_adult_often = implode(", ", $request->input('parent_or_adult_often'));

      	}
      	if (!empty($request->input('adult_or_person_5_years_older_ever'))) {
      				$familyBackground->adult_or_person_5_years_older_ever = implode(", ", $request->input('adult_or_person_5_years_older_ever'));
      	}
      	if (!empty($request->input('often_feel_that'))) {
      				$familyBackground->often_feel_that = implode(", ", $request->input('often_feel_that'));
      	}
      	if (!empty($request->input('mother_or_stepmother'))) {
      				$familyBackground->mother_or_stepmother = implode(", ", $request->input('mother_or_stepmother'));
      	}
        if (!empty($request->input('father_or_stepfather'))) {
      				$familyBackground->father_or_stepfather = implode(", ", $request->input('father_or_stepfather'));
      	}
        $familyBackground->parent_separated_divorced = $request->input('parent_separated_divorced');
        $familyBackground->lived_with_alchoholic_or_drug_user = $request->input('lived_with_alchoholic_or_drug_user');
        $familyBackground->household_member_depressed_mentally_ill_suicide = $request->input('household_member_depressed_mentally_ill_suicide');
        $familyBackground->household_member_went_to_prison = $request->input('household_member_went_to_prison');
        $familyBackground->someone_else_came_to_live_with = $request->input('someone_else_came_to_live_with');
        $familyBackground->moved_around_alot = $request->input('moved_around_alot');
        $familyBackground->homeless = $request->input('homeless');
        $familyBackground->ran_away = $request->input('ran_away');
        $familyBackground->public_assistance = $request->input('public_assistance');
        $familyBackground->could_not_afford_heat_or_water = $request->input('could_not_afford_heat_or_water');
        $familyBackground->poverty = $request->input('poverty');
        $familyBackground->used_drugs_alcohol = $request->input('used_drugs_alcohol');
        $familyBackground->addicted_drugs_alcohol = $request->input('addicted_drugs_alcohol');
        $familyBackground->felt_life_threatened = $request->input('felt_life_threatened');
        $familyBackground->foster_care = $request->input('foster_care');
        $familyBackground->other_family_events = $request->input('other_family_events');

        $familyBackground->save();

        return redirect()->route('survey.family-background-timeline');
    }


    public function getFamilyBackgroundFollowup()
    {
        return view('survey.family-background-followup');
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
        $familyBackgoundFollowup->positive_foster_placements_description = $request->input('positive_foster_placements_description');
        $familyBackgoundFollowup->negative_foster_placements = $request->input('negative_foster_placements');
        $familyBackgoundFollowup->how_many_negative_foster_placements = $request->input('how_many_negative_foster_placements');
        $familyBackgoundFollowup->negative_foster_placements_description = $request->input('negative_foster_placements_description');
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
        $survey->life_events()->attach($request->input('education_events'));

        $education = new Education;

        $education->survey_id = $survey_id;
        if (!empty($request->input('education_events'))) $education->events = implode(", ", $request->input('education_events'));
        $education->other_events = $request->input('other_education_events');
        $education->save();

        $education->surveys()->attach($survey_id);

        return redirect()->route('survey.education-timeline');
    }

    // Work/Housing controllers with timeline and followup questions

    public function getWorkHousing()
    {
        return view('survey.work-housing');
    }

    public function postWorkHousing(Request $request)
    {
        $survey_id = session('survey_id');

        $workHousing = new WorkHousing;

        $workHousing->survey_id = $survey_id;
        if (!empty($request->input('work_housing_events'))) $workHousing->work_housing_events = implode(", ", $request->input('work_housing_events'));
        $workHousing->supported_by_trafficker = $request->input('supported_by_trafficker');
        $workHousing->other_work_events = $request->input('other_work_events');

        $workHousing->save();

        return redirect()->route('survey.work-housing-timeline');
    }

    public function getWorkHousingFollowup(Request $request)
    {
        return view('survey.work-housing-followup');
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

        return view('survey.social-relationships');
    }

	// Social Relationships questions controller

    public function getSocialRelationships()
    {
        return view('survey.social-relationships');
    }

    public function postSocialRelationships(Request $request)
    {
        $survey_id = session('survey_id');

        $socialRelationships = new SocialRelationships;

        $socialRelationships->survey_id = $survey_id;
        if (!empty($request->input('social_relationship_events'))) $socialRelationships->social_relationship_events = implode(", ", $request->input('social_relationship_events'));
        $socialRelationships->tried_to_reconnect_experience = $request->input('tried_to_reconnect_experience');
        $socialRelationships->other_social_relationship_events = $request->input('other_social_relationship_events');

        $socialRelationships->save();

        return view('survey.social-relationships-timeline');
    }

    // Criminal Justice questions controller

    public function getCriminalJustice()
    {
        return view('survey.criminal-justice');
    }

    public function postCriminalJustice(Request $request)
    {
        $survey_id = session('survey_id');

        $criminalJustice = new CriminalJustice;

        $criminalJustice->survey_id = $survey_id;
        if (!empty($request->input('criminal_justice_events'))) $criminalJustice->criminal_justice_events = implode(", ", $request->input('criminal_justice_events'));
        $criminalJustice->other_criminal_justice_events = $request->input('other_criminal_justice_events');

        $criminalJustice->save();

        return redirect()->route('survey.criminal-justice-timeline');
    }

    public function getCriminalJusticeTimeline()
    {
        return view('survey.criminal-justice-timeline');
    }

    public function postCriminalJusticeTimeline(Request $request)
    {
        return view ('survey.timeline.criminal-justice');
    }

    public function getCriminalJusticeFollowup()
    {
        return view ('survey.criminal-justice-followup');
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
        return view('survey.exploitation');
    }

    public function postExploitation(Request $request)
    {
        $survey_id = session('survey_id');

        $exploitation = new Exploitation;

        $exploitation->survey_id = $survey_id;
        if (!empty($request->input('exploitation_events'))) $exploitation->exploitation_events = implode(", ", $request->input('exploitation_events'));
        $exploitation->sold_sex_before_18 = $request->input('sold_sex_before_18');
        $exploitation->sold_sex_after_18 = $request->input('sold_sex_after_18');
        $exploitation->age_first_sold_sex = $request->input('age_first_sold_sex');
        $exploitation->age_last_sold_sex = $request->input('age_last_sold_sex');
        $exploitation->times_tried_to_leave_sex_trade = $request->input('times_tried_to_leave_sex_trade');
        $exploitation->returned_to_sex_trade = $request->input('returned_to_sex_trade');
        $exploitation->times_returned_to_sex_trade = $request->input('times_returned_to_sex_trade');
        $exploitation->other_exploitation_events = $request->input('other_exploitation_events');

        $exploitation->save();

        return redirect()->route('survey.exploitation-timeline');
    }

    public function getExploitationFollowup()
    {
        return view ('survey.exploitation-followup');
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
        return view('survey.services');
    }

    public function postServices(Request $request)
    {
        $survey_id = session('survey_id');

        $services = new Services;

        $services->survey_id = $survey_id;
        $services->social_service_agency_reached_out = $request->input('social_service_agency_reached_out');
        $services->social_service_received = $request->input('social_service_received');
        if (!empty($request->input('services_sought'))) $services->services_sought = implode(", ", $request->input('services_sought'));
        //$services->services_received = implode(", ", $request->input('services_received'));
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
        $services->agency_help_exit_sex_trade = $request->input('agency_help_exit_sex_trade');
        $services->agency_help_exit_sex_trade_other = $request->input('agency_help_exit_sex_trade_other');
        $services->agency_helpful_exiting_sex_trade = $request->input('agency_helpful_exiting_sex_trade');
        $services->other_services = $request->input('other_services');

        $services->save();

        return redirect()->route('survey.services-timeline');
    }

    public function getServicesFollowup()
    {
        return view ('survey.services-followup');
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

    public function getFinalQuestions()
    {
        return view('survey.final-questions');
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

    public function getThankYouGiftCard()
    {
        return view('survey.thankyou-giftcard');
    }

    public function postThankYouGiftCard(Request $request)
    {
        // Check for followup interview
        return redirect()->route('survey.followup-interview');
        return redirect()->route('survey.referral');
    }
}
