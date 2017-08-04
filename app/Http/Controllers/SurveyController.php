<?php

namespace App\Http\Controllers;
//namespace App\Survey;
//namespace App\Orientation;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function getOrientationQuestions()
    {
    	$survey = Survey::find($survey_id);

    	return view ('survey.orientation-questions');
    }
}
