<?php

namespace App\Http\Controllers;

use App\Orientation;
use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function getOrientationQuestions()
    {
        $survey_id = 1;
    	$survey = Survey::find($survey_id);

    	return view ('survey.orientation-questions');
    }

    public function postOrientationQuestions(Request $request)
    {
        $orientation = new Orientation;

        $orientation->year_born = request('year_born');
        $orientation->age_started_living_on_own = request('age_started_living_on_own');
        $orientation->highest_grade_completed = request('highest_grade_completed');
        $orientation->how_old_when_completed_school = request('how_old_when_completed_school');
        $orientation->childhood_event_description = request('childhood_event_description');
        $orientation->childhood_event_age_or_year = request('childhood_event_age_or_year');
        $orientation->adolescense_event_description = request('adolescence_event_description');
        $orientation->adolescense_event_age_or_year = request('adolescence_event_age_or_year');
        $orientation->adulthood_event_description = request('adulthood_event_description');
        $orientation->adulthood_event_age_or_year = request('adulthood_event_age_or_year');

        $orientation->save();

        return redirect('survey.timeline.orientation');
    }
}
