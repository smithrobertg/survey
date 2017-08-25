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

// Family Background routes with timeline and followup questions

Route::get('family-background', 'SurveyController@getFamilyBackground');
Route::post('family-background', 'SurveyController@postFamilyBackground');

Route::get('family-background-timeline', 'SurveyController@getFamilyBackground');
Route::post('family-background-timeline', 'SurveyController@postFamilyBackground');

Route::get('timeline/family-background', function () {
	return view('survey.timeline.family-background');
});

Route::get('family-background-followup', 'SurveyController@getFamilyBackgroundFollowup');
Route::post('family-background-followup', 'SurveyController@postFamilyBackgroundFollowup');

// Education routes with timeline

Route::get('education', 'SurveyController@getEducation');
Route::post('education', 'SurveyController@postEducation');

Route::get('education-timeline', 'SurveyController@getEducationTimeline');
Route::post('education-timeline', 'SurveyController@postEducationTimeline');

Route::get('timeline/education', function () {
	return view('survey.timeline.education');
});

// Work/Housing routes with timeline and followup questions

Route::get('work-housing', 'SurveyController@getWorkHousing');
Route::post('work-housing', 'SurveyController@postWorkHousing');

Route::get('work-housing-timeline', 'SurveyController@getWorkHousingTimeline');
Route::post('work-housing-timeline', 'SurveyController@postWorkHousingTimeline');

Route::get('timeline/work-housing', function () {
	return view('survey.timeline.work-housing');
});

Route::get('work-housing-followup', 'SurveyController@getWorkHousingFollowup');
Route::post('work-housing-followup', 'SurveyController@postWorkHousingFollowup');

// Social Relationship routes with timeline and followup questions

Route::get('social-relationships', 'SurveyController@getSocialRelationships');
Route::post('social-relationships', 'SurveyController@postSocialRelationships');

Route::get('social-relationships-timeline', 'SurveyController@getSocialRelationshipsTimeline');
Route::get('social-relationships-timeline', 'SurveyController@postSocialRelationshipsTimeline');

Route::get('timeline/social-relationships', function () {
	return view('survey.timeline.social-relationships');
});

// Criminal Justice routes with timeline and followup questions

Route::get('criminal-justice', 'SurveyController@getCriminalJustice');
Route::post('criminal-justice', 'SurveyController@postCriminalJustice');

Route::get('criminal-justice-timeline', 'SurveyController@getCriminalJusticeTimeline');
Route::post('criminal-justice-timeline', 'SurveyController@postCriminalJusticeTimeline');

Route::get('timeline/criminal-justice', function () {
	return view('survey.timeline.criminal-justice');
});

Route::get('criminal-justice-followup', 'SurveyController@getCriminalJusticeFollowup');
Route::post('criminal-justice-followup', 'SurveyController@postCriminalJusticeFollowup');


// Exploitation routes with timeline and followup questions

Route::get('exploitation', 'SurveyController@getExploitation');
Route::post('exploitation', 'SurveyController@postExploitation');

Route::get('exploitation-timeline', 'SurveyController@getExploitationTimeline');
Route::post('exploitation-timeline', 'SurveyController@postExploitationTimeline');

Route::get('timeline/exploitation', function () {
    return view('survey.timeline.exploitation');
});

Route::get('exploitation-followup', 'SurveyController@getExploitationFollowup');
Route::post('exploitation-followup', 'SurveyController@postExploitationFollowup');

// Services routes with timeline and followup questions

Route::get('services', 'SurveyController@getServices');
Route::post('services', 'SurveyController@postServices');

Route::get('services-timeline', 'SurveyController@getServicesTimeline');
Route::post('services-timeline', 'SurveyController@postServicesTimeline');

Route::get('timeline/services', function () {
    return view('survey.timeline.services');
});

Route::get('services-followup', 'SurveyController@getServicesFollowup');
Route::post('services-followup', 'SurveyController@postServicesFollowup');

// Final questions and thank you message

Route::get('final-questions', 'SurveyController@getFinalQuestions');
Route::post('final-questions', 'SurveyController@postFinalQuestions');

Route::get('thankyou-giftcard', function () {
	return view('survey.thankyou-giftcard');
});

Route::get('followup-interview', function () {
	return view('survey.followup-interview');
});

Route::get('referral', function () {
	return view('survey.referral');
});
