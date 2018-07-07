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

Route::redirect('/', '/survey-closed');
Route::view('survey-closed', 'survey.survey-closed')->name('survey.survey-closed');

Route::get('survey-list', function () {

	//$surveys = DB::table('surveys')->get();
	$surveys = Survey::all();

	//return $surveys;
	return view('survey-list', compact('surveys'));
});

Route::view('welcome', 'survey.welcome')->name('survey.welcome');

Route::view('screening', 'survey.screening')->name('survey.screening');
Route::post('screening', [ 'uses' => 'SurveyController@postScreening', 'as' => 'survey.screening' ]);

Route::get('consent', 'SurveyController@getConsent')->name('survey.consent');
Route::post('consent', 'SurveyController@postConsent')->name('survey.consent');

Route::view('thankyou-for-participating', 'survey.thankyou-for-participating')->name('survey.thankyou-for-participating');

Route::view('demographics', 'survey.demographics')->name('survey.demographics');
Route::post('demographics', 'SurveyController@postDemographics')->name('survey.demographics');

Route::prefix('survey')->group( function () {

});

Route::prefix('test')->group( function () {

  Route::get('partial', 'TestController@getPartialTest');

  Route::get('whoops', function() {
    bomb;
  });
});

Route::view('timeline-description', 'survey.timeline-description')->name('survey.timeline-description');

Route::view('orientation-questions', 'survey.orientation-questions')->name('survey.orientation-questions');
Route::post('orientation-questions', 'SurveyController@postOrientationQuestions')->name('survey.orientation-questions');

Route::get('timeline/orientation', 'TimelineController@getTimelineOrientation')->name('timeline.orientation');

// Family Background routes with timeline and followup questions

Route::get('family-background', 'SurveyController@getFamilyBackground')->name('survey.family-background');
Route::post('family-background', 'SurveyController@postFamilyBackground')->name('survey.family-background');

Route::get('family-background-timeline', 'TimelineController@getFamilyBackgroundTimeline')->name('survey.family-background-timeline');
Route::post('family-background-timeline', 'TimelineController@postFamilyBackgroundTimeline')->name('survey.family-background-timeline');

Route::get('timeline/family-background', 'TimelineController@getTimelineFamilyBackground')->name('timeline.family-background');

Route::view('family-background-followup', 'survey.family-background-followup')->name('survey.family-backgroud-followup');
Route::post('family-background-followup', 'SurveyController@postFamilyBackgroundFollowup')->name('survey.family-background-followup');

// Education routes with timeline

Route::get('education', 'SurveyController@getEducation')->name('survey.education');
Route::post('education', 'SurveyController@postEducation')->name('survey.education');

Route::get('education-timeline', 'TimelineController@getEducationTimeline')->name('survey.education-timeline');
Route::post('education-timeline', 'TimelineController@postEducationTimeline')->name('survey.education-timeline');

Route::get('timeline/education', 'TimelineController@getTimelineEducation')->name('timeline.education');

// Work/Housing routes with timeline and followup questions

Route::get('work-housing', 'SurveyController@getWorkHousing')->name('survey.work-housing');
Route::post('work-housing', 'SurveyController@postWorkHousing')->name('survey.work-housing');

Route::get('work-housing-timeline', 'TimelineController@getWorkHousingTimeline')->name('survey.work-housing-timeline');
Route::post('work-housing-timeline', 'TimelineController@postWorkHousingTimeline')->name('survey.work-housing-timeline');

Route::get('timeline/work-housing', 'TimelineController@getTimelineWorkHousing')->name('timeline.work-housing');

Route::view('work-housing-followup', 'survey.work-housing-followup')->name('survey.work-housing-followup');
Route::post('work-housing-followup', 'SurveyController@postWorkHousingFollowup')->name('survey.work-housing-followup');

// Social Relationship routes with timeline and followup questions

Route::get('social-relationships', 'SurveyController@getSocialRelationships')->name('survey.social-relationships');
Route::post('social-relationships', 'SurveyController@postSocialRelationships')->name('survey.social-relationships');

Route::get('social-relationships-timeline', 'TimelineController@getSocialRelationshipsTimeline')->name('survey.social-relationships-timeline');
Route::post('social-relationships-timeline', 'TimelineController@postSocialRelationshipsTimeline')->name('survey.social-relationships-timeline');

Route::get('timeline/social-relationships', 'TimelineController@getTimelineSocialRelationships')->name('timeline.social-relationships');

// Criminal Justice routes with timeline and followup questions

Route::get('criminal-justice', 'SurveyController@getCriminalJustice')->name('survey.criminal-justice');
Route::post('criminal-justice', 'SurveyController@postCriminalJustice')->name('survey.criminal-justice');

Route::get('criminal-justice-timeline', 'TimelineController@getCriminalJusticeTimeline')->name('survey.criminal-justice-timeline');
Route::post('criminal-justice-timeline', 'TimelineController@postCriminalJusticeTimeline')->name('survey.criminal-justice-timeline');

Route::get('timeline/criminal-justice', 'TimelineController@getTimelineCriminalJustice')->name('timeline.criminal-justice');

Route::view('criminal-justice-followup', 'survey.criminal-justice-followup')->name('survey.criminal-justice-followup');
Route::post('criminal-justice-followup', 'SurveyController@postCriminalJusticeFollowup')->name('survey.criminal-justice-followup');


// Exploitation routes with timeline and followup questions

Route::get('exploitation', 'SurveyController@getExploitation')->name('survey.exploitation');
Route::post('exploitation', 'SurveyController@postExploitation')->name('survey.exploitation');

Route::get('exploitation-timeline', 'TimelineController@getExploitationTimeline')->name('survey.exploitation-timeline');
Route::post('exploitation-timeline', 'TimelineController@postExploitationTimeline')->name('survey.exploitation-timeline');

Route::get('timeline/exploitation', 'TimelineController@getTimelineExploitation')->name('timeline.exploitation');

Route::view('exploitation-followup', 'survey.exploitation-followup')->name('survey.exploitation-followup');
Route::post('exploitation-followup', 'SurveyController@postExploitationFollowup')->name('survey.exploitation-followup');

// Services routes with timeline and followup questions

Route::get('services', 'SurveyController@getServices')->name('survey.services');
Route::post('services', 'SurveyController@postServices')->name('survey.services');

Route::get('services-timeline', 'TimelineController@getServicesTimeline')->name('survey.services-timeline');
Route::post('services-timeline', 'TimelineController@postServicesTimeline')->name('survey.services-timeline');

Route::get('timeline/services', 'TimelineController@getTimelineServices')->name('timeline.services');

Route::view('services-followup', 'survey.services-followup')->name('survey.services-followup');
Route::post('services-followup', 'SurveyController@postServicesFollowup')->name('survey.services-followup');

// Final questions and thank you message

Route::view('final-questions', 'survey.final-questions')->name('survey.final-questions');
Route::post('final-questions', 'SurveyController@postFinalQuestions')->name('survey.final-questions');

Route::view('thankyou-giftcard', 'survey.thankyou-giftcard')->name('survey.thankyou-giftcard');
Route::post('thankyou-giftcard', 'SurveyController@postThankYouGiftCard')->name('survey.thankyou-giftcard');

Route::view('followup-interview', 'survey.followup-interview')->name('survey.followup-interview');
Route::view('referral', 'survey.referral')->name('survey.referral');

Route::get('survey-complete', 'SurveyController@getSurveyComplete')->name('survey.survey-complete');
