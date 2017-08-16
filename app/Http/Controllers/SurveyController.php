<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Orientation;
use App\Survey;
use App\FamilyBackground;
use App\Education;
use Illuminate\Http\Request;

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
        dd($request);

        $familyBackground = new FamilyBackground;

        $familyBackground->parent_got_married = $request->input('parent_got_married');

        $familyBackground->save();

        //return view('survey.timeline.family-background');
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

        return view('survey.social-relationships');
    }

}
