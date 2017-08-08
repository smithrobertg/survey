<?php

namespace App\Http\Controllers;
//namespace App\Orientation;

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
}
