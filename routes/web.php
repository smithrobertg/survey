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
    return view('survey.welcome');
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
})->name('survey.welcome');

Route::get('screening', [ 'uses' => 'SurveyController@getScreening', 'as' => 'survey.screening' ]);
Route::post('screening', [ 'uses' => 'SurveyController@postScreening', 'as' => 'survey.screening' ]);

Route::get('consent', 'SurveyController@getConsent')->name('survey.consent');
Route::post('consent', 'SurveyController@postConsent')->name('survey.consent');

Route::get('thankyou-for-participating', 'SurveyController@getThankYouForParticipating')->name('survey.thankyou-for-participating');
/*
Route::get('thankyou-for-participating', function () {
	//return view('survey/thankyou-for-participating', [
	//	'participant_id' => 'XYZ0123456789'
	//]);

	$survey_id = 3;
	$participant_id = 'XYZ0123456789';

	return view('survey.thankyou-for-participating', compact('survey_id', 'participant_id'));
});
*/

Route::get('demographics', 'SurveyController@getDemographics')->name('survey.demographics');
Route::post('demographics', 'SurveyController@postDemographics')->name('survey.demographics');
//Route::get('demographics/{survey}/create', 'DemographicsController@create');
//Route::post('demographics', 'DemographicsController@store')->name('survey.demographics');
//Route::get('survey/{survey}/demographics', 'DemographicsController@create');

Route::prefix('survey')->group( function () {

});

Route::prefix('test')->group( function () {

  Route::get('partial', 'TestController@getPartialTest');

  Route::get('whoops', function() {
    bomb;
  });
});


Route::get('timeline-description', function () {
	return view('survey.timeline-description');
})->name('survey.timeline-description');

Route::get('orientation-questions', 'SurveyController@getOrientationQuestions')->name('survey.orientation-questions');
Route::post('orientation-questions', 'SurveyController@postOrientationQuestions')->name('survey.orientation-questions');

Route::get('survey/{survey}/orientation-questions', 'SurveyController@getOrientationQuestions');

Route::get('timeline/orientation', function () {
	return view('survey.timeline.orientation');
})->name('timeline.orientation');

// Family Background routes with timeline and followup questions

Route::get('family-background', 'SurveyController@getFamilyBackground')->name('survey.family-background');
Route::post('family-background', 'SurveyController@postFamilyBackground')->name('survey.family-background');

Route::get('family-background-timeline', 'TimelineController@getFamilyBackgroundTimeline')->name('survey.family-background-timeline');
Route::post('family-background-timeline', 'TimelineController@postFamilyBackgroundTimeline')->name('survey.family-background-timeline');

Route::get('timeline/family-background', function () {
	return view('survey.timeline.family-background');
})->name('timeline.family-background');

Route::get('family-background-followup', 'SurveyController@getFamilyBackgroundFollowup')->name('survey.family-backgroud-followup');
Route::post('family-background-followup', 'SurveyController@postFamilyBackgroundFollowup')->name('survey.family-background-followup');

// Education routes with timeline

Route::get('education', 'SurveyController@getEducation')->name('survey.education');
Route::post('education', 'SurveyController@postEducation')->name('survey.education');

Route::get('education-timeline', 'TimelineController@getEducationTimeline')->name('survey.education-timeline');
Route::post('education-timeline', 'TimelineController@postEducationTimeline')->name('survey.education-timeline');
/*
Route::get('timeline/education', function () {
	return view('survey.timeline.education');
})->name('timeline.education');
*/
Route::get('timeline/education', 'TimelineController@getTimelineEducation')->name('timeline.education');

// Work/Housing routes with timeline and followup questions

Route::get('work-housing', 'SurveyController@getWorkHousing')->name('survey.work-housing');
Route::post('work-housing', 'SurveyController@postWorkHousing')->name('survey.work-housing');

Route::get('work-housing-timeline', 'TimelineController@getWorkHousingTimeline')->name('survey.work-housing-timeline');
Route::post('work-housing-timeline', 'TimelineController@postWorkHousingTimeline')->name('survey.work-housing-timeline');
/*
Route::get('timeline/work-housing', function () {
	return view('survey.timeline.work-housing');
})->name('timeline.work-housing');
*/
Route::get('timeline/work-housing', 'TimelineController@getTimelineWorkHousing')->name('timeline.work-housing');

Route::get('work-housing-followup', 'SurveyController@getWorkHousingFollowup')->name('survey.work-housing-followup');
Route::post('work-housing-followup', 'SurveyController@postWorkHousingFollowup')->name('survey.work-housing-followup');

// Social Relationship routes with timeline and followup questions

Route::get('social-relationships', 'SurveyController@getSocialRelationships')->name('survey.social-relationships');
Route::post('social-relationships', 'SurveyController@postSocialRelationships')->name('survey.social-relationships');

Route::get('social-relationships-timeline', 'TimelineController@getSocialRelationshipsTimeline')->name('survey.social-relationships-timeline');
Route::post('social-relationships-timeline', 'TimelineController@postSocialRelationshipsTimeline')->name('survey.social-relationships-timeline');

Route::get('timeline/social-relationships', function () {
	return view('survey.timeline.social-relationships');
})->name('timeline.social-relationships');

// Criminal Justice routes with timeline and followup questions

Route::get('criminal-justice', 'SurveyController@getCriminalJustice')->name('survey.criminal-justice');
Route::post('criminal-justice', 'SurveyController@postCriminalJustice')->name('survey.criminal-justice');

Route::get('criminal-justice-timeline', 'TimelineController@getCriminalJusticeTimeline')->name('survey.criminal-justice-timeline');
Route::post('criminal-justice-timeline', 'TimelineController@postCriminalJusticeTimeline')->name('survey.criminal-justice-timeline');

Route::get('timeline/criminal-justice', function () {
	return view('survey.timeline.criminal-justice');
})->name('timeline.criminal-justice');

Route::get('criminal-justice-followup', 'SurveyController@getCriminalJusticeFollowup')->name('survey.criminal-justice-followup');
Route::post('criminal-justice-followup', 'SurveyController@postCriminalJusticeFollowup')->name('survey.criminal-justice-followup');


// Exploitation routes with timeline and followup questions

Route::get('exploitation', 'SurveyController@getExploitation')->name('survey.exploitation');
Route::post('exploitation', 'SurveyController@postExploitation')->name('survey.exploitation');

Route::get('exploitation-timeline', 'TimelineController@getExploitationTimeline')->name('survey.exploitation-timeline');
Route::post('exploitation-timeline', 'TimelineController@postExploitationTimeline')->name('survey.exploitation-timeline');

Route::get('timeline/exploitation', function () {
    return view('survey.timeline.exploitation');
})->name('timeline.exploitation');

Route::get('exploitation-followup', 'SurveyController@getExploitationFollowup')->name('survey.exploitation-followup');
Route::post('exploitation-followup', 'SurveyController@postExploitationFollowup')->name('survey.exploitation-followup');

// Services routes with timeline and followup questions

Route::get('services', 'SurveyController@getServices')->name('survey.services');
Route::post('services', 'SurveyController@postServices')->name('survey.services');

Route::get('services-timeline', 'TimelineController@getServicesTimeline')->name('survey.services-timeline');
Route::post('services-timeline', 'TimelineController@postServicesTimeline')->name('survey.services-timeline');

Route::get('timeline/services', function () {
    return view('survey.timeline.services');
})->name('timeline.services');

Route::get('services-followup', 'SurveyController@getServicesFollowup')->name('survey.services-followup');
Route::post('services-followup', 'SurveyController@postServicesFollowup')->name('survey.services-followup');

// Final questions and thank you message

Route::get('final-questions', 'SurveyController@getFinalQuestions')->name('survey.final-questions');
Route::post('final-questions', 'SurveyController@postFinalQuestions')->name('survey.final-questions');

Route::get('thankyou-giftcard', 'SurveyController@getThankYouGiftCard')->name('survey.thankyou-giftcard');
Route::post('thankyou-giftcard', 'SurveyController@postThankYouGiftCard')->name('survey.thankyou-giftcard');

Route::get('followup-interview', function () {
	return view('survey.followup-interview');
})->name('survey.followup-interview');

Route::get('referral', function () {
	return view('survey.referral');
})->name('survey.referral');

Route::view('survey-complete', 'survey.survey-complete')->name('survey.survey-complete');
