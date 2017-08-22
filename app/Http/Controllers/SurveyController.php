<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orientation;
use App\Survey;
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

class SurveyController extends Controller
{
    //
    public function getOrientationQuestions()
    {
        $survey_id = 1;
        $survey = Survey::find($survey_id);

        return view('survey.orientation-questions');
    }

    public function postOrientationQuestions(Request $request)
    {
        $orientation = new Orientation;

        $orientation->year_born = $request->input('year_born');
        $orientation->age_started_living_on_own = $request->input('age_started_living_on_own');
        $orientation->highest_grade_completed = $request->input('highest_grade_completed');
        $orientation->how_old_when_completed_school = $request->input('how_old_when_completed_school');
        $orientation->childhood_event_description = $request->input('childhood_event_description');
        $orientation->childhood_event_age_or_year = $request->input('childhood_event_age_or_year');
        //$orientation->adolescense_event_description = $request->input('adolescence_event_description');
        //$orientation->adolescense_event_age_or_year = $request->input('adolescence_event_age_or_year');
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
        //dd($request);

        $familyBackground = new FamilyBackground;

        $familyBackground->parent_got_married = $request->input('parent_got_married');
        $familyBackground->parent_or_adult_often = implode(", ", $request->input('parent_or_adult_often'));
        $familyBackground->adult_or_person_5_years_older_ever = implode(", ", $request->input('adult_or_person_5_years_older_ever'));
        $familyBackground->often_feel_that = implode(", ", $request->input('often_feel_that'));
        $familyBackground->parent_separated_divorced = $request->input('parent_separated_divorced');
        $familyBackground->mother_or_stepmother = implode(", ", $request->input('mother_or_stepmother'));
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
        $familyBackground->age_foster_care_ended = $request->input('age_foster_care_ended');
        $familyBackground->other_family_events = $request->input('other_family_events');

        $familyBackground->save();

        return view('survey.family-background-timeline');
    }

    public function getFamilyBackgoundTimeline()
    {
        return view('survey.family-background-timeline');
    }

    public function postFamilyBackgroundTimeline(Request $request)
    {
        return view('survey.timeline.family-background');
    }

    public function getFamilyBackgroundFollowup()
    {
        return view('survey.family-background-followup');
    }

    public function postFamilyBackgroundFollowup(Request $request)
    {
        $familyBackgoundFollowup = new FamilyBackgroundFollowup;

        $familyBackgoundFollowup->turned_to_for_support = implode(", ", $request->input('turned_to_for_support'));
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

        return view('survey.education');
    }

    public function getEducation()
    {
        return view('survey.education');
    }

    public function postEducation(Request $request)
    {
        $education = new Education;

        $education->events = implode(", ", $request->input('education_events'));
        $education->other_events = $request->input('other_education_events');
        $education->save();

        return view('survey.education-timeline');
    }

    public function getEducationTimeline()
    {
        return view('survey.education-timeline');
    }

    public function postEducationTimeline(Request $request)
    {
        return view('survey.timeline.eduction');
    }

    // Work/Housing controllers with timeline and followup questions

    public function getWorkHousing()
    {
        return view('survey.work-housing');
    }

    public function postWorkHousing(Request $request)
    {
        // save work/housing form $request data
        $workHousing = new WorkHousing;

        $workHousing->work_housing_events = implode(", ", $request->input('work_housing_events'));
        $workHousing->supported_by_trafficker = $request->input('supported_by_trafficker');
        $workHousing->other_work_events = $request->input('other_work_events');

        $workHousing->save();

        return view('survey.work-housing-timeline');
    }

    public function getWorkHousingTimeline()
    {
        return view('survey.work-housing-timeline');
    }

    public function postWorkHousingTimeline(Request $request)
    {
        return view('survey.timeline.work-housing');
    }

    public function getWorkHousingFollowup(Request $request)
    {
        return view('survey.work-housing-followup');
    }

    public function postWorkHousingFollowup(Request $request)
    {
        // save work/housing followup form $request data
        $workHousingFollowup = new WorkHousingFollowup;

        $workHousingFollowup->work_applied_for_outside_sex_trade = $request->input('work_applied_for_outside_sex_trade');
        $workHousingFollowup->when_applied_for_first_job = $request->input('when_applied_for_first_job');
        $workHousingFollowup->when_applied_for_first_job_as_adult = $request->input('when_applied_for_first_job_as_adult');

        $workHousingFollowup->save();

        return view('survey.social-relationships');
    }

    public function getSocialRelationships()
    {
        return view('survey.social-relationships');
    }

    public function postSocialRelationships(Request $request)
    {
        $socialRelationships = new SocialRelationships;

        $socialRelationships->social_relationship_events = implode(", ", $request->input('social_relationship_events'));
        $socialRelationships->tried_to_reconnect_experience = $request->input('tried_to_reconnect_experience');
        $socialRelationships->other_social_relationship_events = $request->input('other_social_relationship_events');

        $socialRelationships->save();

        return view('survey.social-relationships-timeline');
    }

    public function getSocialRelationshipsTimeline()
    {
        return view('survey.social-relationships-timeline');
    }

    public function postSocialRelationshipsTimeline(Request $request)
    {
        return view('survey.timeline.social-relationships');
    }

    // Criminal Justice questions controller

    public function getCriminalJustice()
    {
        return view('survey.criminal-justice');
    }

    public function postCriminalJustice(Request $request)
    {
        $criminalJustice = new CriminalJustice;

        $criminalJustice->criminal_justice_events = implode(", ", $request->input('criminal_justice_events'));
        $criminalJustice->other_criminal_justice_events = $request->input('other_criminal_justice_events');

        $criminalJustice->save();

        return view('survey.criminal-justice-timeline');
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
        $criminalJusticeFollowup = new CriminalJusticeFollowup;

        $criminalJusticeFollowup->issues_because_of_criminal_record = $request->input('issues_because_of_criminal_record');
        $criminalJusticeFollowup->arrested_charges = $request->input('arrested_charges');
        $criminalJusticeFollowup->convicted_charges = $request->input('convicted_charges');

        $criminalJusticeFollowup->save();

        return view ('survey.exploitation');
    }

    // Exploitation questions controller

    public function getExploitation()
    {
        return view('survey.exploitation');
    }

    public function postExploitation(Request $request)
    {
        $exploitation = new Exploitation;

        $exploitation->exploitation_events = implode(", ", $request->input('exploitation_events'));
        $exploitation->sold_sex_before_18 = $request->input('sold_sex_before_18');
        $exploitation->sold_sex_after_18 = $request->input('sold_sex_after_18');
        $exploitation->age_first_sold_sex = $request->input('age_first_sold_sex');
        $exploitation->age_last_sold_sex = $request->input('age_last_sold_sex');
        $exploitation->times_tried_to_leave_sex_trade = $request->input('times_tried_to_leave_sex_trade');
        $exploitation->returned_to_selling_sex = $request->input('returned_to_selling_sex');

        $exploitation->save();

        return view('survey.exploitation-timeline');
    }

    public function getExploitationTimeline()
    {
        return view('survey.exploitation-timeline');
    }

    public function postExploitationTimeline(Request $request)
    {
        return view ('survey.timeline.exploitation');
    }

    public function getExploitationFollowup()
    {
        return view ('survey.exploitation-followup');
    }

    public function postExploitationFollowup(Request $request)
    {
        $exploitationFollowup = new ExploitationFollowup;

        $exploitationFollowup->first_instance_selling_sex = $request->input('first_instance_selling_sex');
        $exploitationFollowup->why_returned_selling_sex = $request->input('why_returned_selling_sex');
        $exploitationFollowup->how_take_care_of_self = $request->input('how_take_care_of_self');
        $exploitationFollowup->how_react_to_stressful_situation = $request->input('how_react_to_stressful_situation');
        $exploitationFollowup->other_exploitation_events = $request->input('other_exploitation_events');

        $exploitationFollowup->save();

        return view ('survey.services');
    }

    // Services questions controller

    public function getServices()
    {
        return view('survey.services');
    }

    public function postServices(Request $request)
    {
        $services = new Services;

//        $exploitation->exploitation_events = implode(", ", $request->input('exploitation_events'));
//        $exploitation->sold_sex_before_18 = $request->input('sold_sex_before_18');
//        $exploitation->sold_sex_after_18 = $request->input('sold_sex_after_18');
//        $exploitation->age_first_sold_sex = $request->input('age_first_sold_sex');
//        $exploitation->age_last_sold_sex = $request->input('age_last_sold_sex');
//        $exploitation->times_tried_to_leave_sex_trade = $request->input('times_tried_to_leave_sex_trade');
//        $exploitation->returned_to_selling_sex = $request->input('returned_to_selling_sex');

//        $services->save();

        return view('survey.services-timeline');
    }

    public function getServicesTimeline()
    {
        return view('survey.services-timeline');
    }

    public function postServicesTimeline(Request $request)
    {
        return view('survey.timeline.services');
    }

    public function getServicesFollowup()
    {
        return view ('survey.services-followup');
    }

    public function postServicesFollowup(Request $request)
    {
        $servicesFollowup = new ServicesFollowup;

//        $exploitationFollowup->first_instance_selling_sex = $request->input('first_instance_selling_sex');
//        $exploitationFollowup->why_returned_selling_sex = $request->input('why_returned_selling_sex');
//        $exploitationFollowup->how_take_care_of_self = $request->input('how_take_care_of_self');
//        $exploitationFollowup->how_react_to_stressful_situation = $request->input('how_react_to_stressful_situation');
//        $exploitationFollowup->other_exploitation_events = $request->input('other_exploitation_events');

//        $servicesFollowup->save();

        return view ('survey.final-questions');
    }
}
