<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Survey;


Route::get('/', function () {
    return view('welcome');
});

Route::get('survey-list', function () {

	//$surveys = DB::table('surveys')->get();
	$surveys = Survey::all();

	//return $surveys;
	return view('survey-list', compact('surveys'));
});

Route::get('/survey/{id}', function ($id) {

	//$survey = DB::table('surveys')->find($id);
	$survey = Survey::find($id);

	dd($survey);
});

Route::get('welcome', function () {
	return view('survey.welcome');
});

Route::get('screening', function () {
	return view('survey.screening');
});

Route::get('consent', function () {
	return view('survey.consent');
});

Route::post('consent', function () {
	return view('survey.thankyou-for-participating');
});

Route::get('thankyou-for-participating', function () {
	//return view('survey/thankyou-for-participating', [
	//	'participant_id' => 'XYZ0123456789'
	//]);

	$survey_id = 3;
	$participant_id = 'XYZ0123456789';

	return view('survey.thankyou-for-participating', compact('survey_id', 'participant_id'));
});

Route::get('survey/{survey}/demographics', 'DemographicsController@create');

//Route::get('demographics/{survey}/create', 'DemographicsController@create');

Route::post('demographics', 'DemographicsController@store');

Route::get('timeline-description', function () {
	return view('survey.timeline-description');
});

Route::get('orientation-questions', 'SurveyController@getOrientationQuestions');
Route::post('orientation-questions', 'SurveyController@postOrientationQuestions');

Route::get('survey/{survey}/orientation-questions', 'SurveyController@getOrientationQuestions');

Route::get('timeline/orientation', function () {
	return view('survey.timeline.orientation');
});

Route::get('family-background', 'SurveyController@getFamilyBackground');
Route::post('family-background', 'SurveyController@postFamilyBackground');

Route::get('family-background-timeline', function () {
	return view('survey.family-background-timeline');
});

Route::get('timeline/family-background', function () {
	return view('survey.timeline.family-background');
});

Route::get('family-background-followup', function () {
	return view('survey.family-background-followup');
});

Route::get('education', function () {
	return view('survey.education');
});

Route::get('education-timeline', function () {
	return view('survey.education-timeline');
});

Route::get('timeline/education', function () {
	return view('survey.timeline.education');
});

Route::get('work-housing', function () {
	return view('survey.work-housing');
});

Route::get('work-housing-timeline', function () {
	return view('survey.work-housing-timeline');
});

Route::get('timeline/work-housing', function () {
	return view('survey.timeline.work-housing');
});

Route::get('work-housing-followup', function () {
	return view('survey.work-housing-followup');
});

Route::get('social-relationships', function () {
	return view('survey.social-relationships');
});

Route::get('social-relationships-timeline', function () {
	return view('survey.social-relationships-timeline');
});

Route::get('timeline/social-relationships', function () {
	return view('survey.timeline.social-relationships');
});

Route::get('social-relationships-followup', function () {
	return view('survey.social-relationships-followup');
});

Route::get('criminal-justice', function () {
	return view('survey.criminal-justice');
});

Route::get('criminal-justice-timeline', function () {
	return view('survey.criminal-justice-timeline');
});

Route::get('timeline/criminal-justice', function () {
	return view('survey.timeline.criminal-justice');
});

Route::get('criminal-justice-followup', function () {
	return view('survey.criminal-justice-followup');
});

Route::get('exploitation', function () {
	return view('survey.exploitation');
});

Route::get('exploitation-timeline', function () {
	return view('survey.exploitation-timeline');
});

Route::get('timeline/exploitation', function () {
	return view('survey.timeline.exploitation');
});

Route::get('exploitation-followup', function () {
	return view('survey.exploitation-followup');
});

Route::get('services', function () {
	return view('survey.services');
});

Route::get('services-timeline', function () {
	return view('survey.services-timeline');
});

Route::get('timeline/services', function () {
	return view('survey.timeline.services');
});

Route::get('services-followup', function () {
	return view('survey.services-followup');
});

Route::get('final-questions', function () {
	return view('survey.final-questions');
});

Route::get('thankyou-giftcard', function () {
	return view('survey.thankyou-giftcard');
});

Route::get('followup-interview', function () {
	return view('survey.followup-interview');
});

Route::get('referral', function () {
	return view('survey.referral');
});

