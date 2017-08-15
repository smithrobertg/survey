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

        return view('survey.timeline.family-background');
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
}
