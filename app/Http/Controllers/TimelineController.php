<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\TimelineEvent;
use App\EventCategory;
use App\Education;

class TimelineController extends Controller
{
    // Helper function to clear timeline events for a survey for an event category (e.g., Family Background)
    public function ClearTimelineEvents (Survey $survey, EventCategory $category)
    {
        $surveyTimelineEvents = $survey->timeline_events()->with('life_event')->get();

        foreach ($surveyTimelineEvents as $timelineEvent)
        {
          if ($timelineEvent->life_event->event_category_id === $category->id) {
            $timelineEvent->delete();
          }
        }
    }

    //
    public function getTimelineOrientation()
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Orientation";
        //$eventCategory = EventCategory::where('category', $category)->first();
        $allEventCategories = EventCategory::all();

        $allTimelineEvents = $survey->timeline_events()->with('life_event')
                                //->where('life_event.event_category_id', $eventCategory->id)
                                ->orderBy('id')
                                ->get();

        return view('survey.timeline.life-events-timeline', [
          'lifeEventCategory' => $category,
          'eventCategories' => $allEventCategories,
          'timelineEvents' => $allTimelineEvents,
          'nextPage' => route('survey.family-background'),
          'nextPageMessage' => 'Family Background events'
        ]);
    }

    public function getFamilyBackgroundTimeline()
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Family Background";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        return view('survey.family-background-timeline', [
          'timelineEvents' => $timelineEvents
        ]);
        
    }

    public function postFamilyBackgroundTimeline(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Family Background";
        $eventCategory = EventCategory::where('category', $category)->first();

        // Clear out any previously set Timeline events for this category
        $this->ClearTimelineEvents($survey, $eventCategory);

        // Get all life LifeEvents for this category
        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        foreach ($timelineEvents as $timelineEvent)
        {
            $newTimelineEvent = new TimelineEvent;
            $newTimelineEvent->survey_id = session('survey_id');
            $newTimelineEvent->life_event_id = $timelineEvent->id;
            $newTimelineEvent->timeframe = $request->input('timeframe_' . $timelineEvent->id);
            $newTimelineEvent->age = $request->input('age_' . $timelineEvent->id);
            $newTimelineEvent->year = $request->input('year_' . $timelineEvent->id);
            $newTimelineEvent->range_from = $request->input('range_from_' . $timelineEvent->id);
            $newTimelineEvent->range_to = $request->input('range_to_' . $timelineEvent->id);
            $newTimelineEvent->save();
        }

        return redirect()->route('timeline.family-background');
    }

    public function getTimelineFamilyBackground()
    {
      $survey_id = session('survey_id');
      $survey = Survey::find($survey_id);
      $category = "Family Background";
      $eventCategory = EventCategory::where('category', $category)->first();
      $allEventCategories = EventCategory::all();

      $allTimelineEvents = $survey->timeline_events()->with('life_event')
                              ->orderBy('id')
                              ->get();

      return view('survey.timeline.life-events-timeline', [
        'lifeEventCategory' => $category,
        'eventCategories' => $allEventCategories,
        'timelineEvents' => $allTimelineEvents,
        'nextPage' => route('survey.family-backgroud-followup'),
        'nextPageMessage' => 'Family/Background follup-up questions'
      ]);
    }

    public function getEducationTimeline()
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Education";
        $eventCategory = EventCategory::where('category', $category)->first();

        $educationTimelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        return view('survey.education-timeline', [
          'timelineEvents' => $educationTimelineEvents
        ]);
    }

    public function postEducationTimeline(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Education";
        $eventCategory = EventCategory::where('category', $category)->first();

        $educationTimelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        foreach ($educationTimelineEvents as $timelineEvent)
        {
            $newTimelineEvent = new TimelineEvent;
            $newTimelineEvent->survey_id = session('survey_id');
            $newTimelineEvent->life_event_id = $timelineEvent->id;
            $newTimelineEvent->timeframe = $request->input('timeframe_' . $timelineEvent->id);
            $newTimelineEvent->age = $request->input('age_' . $timelineEvent->id);
            $newTimelineEvent->year = $request->input('year_' . $timelineEvent->id);
            $newTimelineEvent->range_from = $request->input('range_from_' . $timelineEvent->id);
            $newTimelineEvent->range_to = $request->input('range_to_' . $timelineEvent->id);
            $newTimelineEvent->save();
        }

        return redirect()->route('timeline.education');
    }

  public function getTimelineEducation()
  {
      $survey_id = session('survey_id');
      $survey = Survey::find($survey_id);
      $category = "Education";
      $eventCategory = EventCategory::where('category', $category)->first();
      $allEventCategories = EventCategory::all();

      $educationTimelineEvents = $survey->timeline_events()->with('life_event')
                              //->where('life_event.event_category_id', $eventCategory->id)
                              ->orderBy('id')
                              ->get();

      return view('survey.timeline.life-events-timeline', [
        'lifeEventCategory' => $category,
        'eventCategories' => $allEventCategories,
        'timelineEvents' => $educationTimelineEvents,
        'nextPage' => route('survey.work-housing'),
        'nextPageMessage' => 'Work/Housing Events'
      ]);
  }

	public function getWorkHousingTimeline()
	{
      $survey_id = session('survey_id');
      $survey = Survey::find($survey_id);
      $category = "Work Housing";
      $eventCategory = EventCategory::where('category', $category)->first();

      $workHousingTimelineEvents = $survey->life_events()
                              ->where('event_category_id', $eventCategory->id)
                              ->where('timeline', true)
                              ->orderBy('id')
                              ->get();

      return view('survey.work-housing-timeline', [
        'timelineEvents' => $workHousingTimelineEvents
      ]);
	}

	public function postWorkHousingTimeline(Request $request)
	{
      $survey_id = session('survey_id');
      $survey = Survey::find($survey_id);
      $category = "Work Housing";
      $eventCategory = EventCategory::where('category', $category)->first();

      $workHousingTimelineEvents = $survey->life_events()
                              ->where('event_category_id', $eventCategory->id)
                              ->where('timeline', true)
                              ->orderBy('id')
                              ->get();

      foreach ($workHousingTimelineEvents as $timelineEvent)
      {
          $newTimelineEvent = new TimelineEvent;
          $newTimelineEvent->survey_id = session('survey_id');
          $newTimelineEvent->life_event_id = $timelineEvent->id;
          $newTimelineEvent->timeframe = $request->input('timeframe_' . $timelineEvent->id);
          $newTimelineEvent->age = $request->input('age_' . $timelineEvent->id);
          $newTimelineEvent->year = $request->input('year_' . $timelineEvent->id);
          $newTimelineEvent->range_from = $request->input('range_from_' . $timelineEvent->id);
          $newTimelineEvent->range_to = $request->input('range_to_' . $timelineEvent->id);
          $newTimelineEvent->save();
      }

  		return redirect()->route('timeline.work-housing');
	}

  public function getTimelineWorkHousing()
  {
    $survey_id = session('survey_id');
    $survey = Survey::find($survey_id);
    $category = "Work Housing";
    $eventCategory = EventCategory::where('category', $category)->first();
    $allEventCategories = EventCategory::all();

    $allTimelineEvents = $survey->timeline_events()->with('life_event')
                            ->orderBy('id')
                            ->get();

  return view('survey.timeline.life-events-timeline', [
    'lifeEventCategory' => $category,
    'eventCategories' => $allEventCategories,
    'timelineEvents' => $allTimelineEvents,
    'nextPage' => route('survey.social-relationships'),
    'nextPageMessage' => 'Social/Relationship events'
  ]);
  }

    public function getSocialRelationshipsTimeline()
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Social Relationships";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        return view('survey.social-relationships-timeline', [
          'timelineEvents' => $timelineEvents
        ]);
    }

    public function postSocialRelationshipsTimeline(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Social Relationships";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        foreach ($timelineEvents as $timelineEvent)
        {
            $newTimelineEvent = new TimelineEvent;
            $newTimelineEvent->survey_id = session('survey_id');
            $newTimelineEvent->life_event_id = $timelineEvent->id;
            $newTimelineEvent->timeframe = $request->input('timeframe_' . $timelineEvent->id);
            $newTimelineEvent->age = $request->input('age_' . $timelineEvent->id);
            $newTimelineEvent->year = $request->input('year_' . $timelineEvent->id);
            $newTimelineEvent->range_from = $request->input('range_from_' . $timelineEvent->id);
            $newTimelineEvent->range_to = $request->input('range_to_' . $timelineEvent->id);
            $newTimelineEvent->save();
        }

        return redirect()->route('timeline.social-relationships');
    }

    public function getTimelineSocialRelationships()
    {
      $survey_id = session('survey_id');
      $survey = Survey::find($survey_id);
      $category = "Social Relationships";
      $eventCategory = EventCategory::where('category', $category)->first();
      $allEventCategories = EventCategory::all();

      $allTimelineEvents = $survey->timeline_events()->with('life_event')
                              ->orderBy('id')
                              ->get();

    return view('survey.timeline.life-events-timeline', [
      'lifeEventCategory' => $category,
      'eventCategories' => $allEventCategories,
      'timelineEvents' => $allTimelineEvents,
      'nextPage' => route('survey.criminal-justice'),
      'nextPageMessage' => 'Criminal Justice events'
    ]);
    }

    public function getCriminalJusticeTimeline()
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Criminal Justice";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        return view('survey.criminal-justice-timeline', [
          'timelineEvents' => $timelineEvents
        ]);
    }

    public function postCriminalJusticeTimeline(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Criminal Justice";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        foreach ($timelineEvents as $timelineEvent)
        {
            $newTimelineEvent = new TimelineEvent;
            $newTimelineEvent->survey_id = session('survey_id');
            $newTimelineEvent->life_event_id = $timelineEvent->id;
            $newTimelineEvent->timeframe = $request->input('timeframe_' . $timelineEvent->id);
            $newTimelineEvent->age = $request->input('age_' . $timelineEvent->id);
            $newTimelineEvent->year = $request->input('year_' . $timelineEvent->id);
            $newTimelineEvent->range_from = $request->input('range_from_' . $timelineEvent->id);
            $newTimelineEvent->range_to = $request->input('range_to_' . $timelineEvent->id);
            $newTimelineEvent->save();
        }

        return redirect()->route('timeline.criminal-justice');
    }

    public function getTimelineCriminalJustice()
    {
      $survey_id = session('survey_id');
      $survey = Survey::find($survey_id);
      $category = "Criminal Justice";
      $eventCategory = EventCategory::where('category', $category)->first();
      $allEventCategories = EventCategory::all();

      $allTimelineEvents = $survey->timeline_events()->with('life_event')
                              ->orderBy('id')
                              ->get();

      return view('survey.timeline.life-events-timeline', [
        'lifeEventCategory' => $category,
        'eventCategories' => $allEventCategories,
        'timelineEvents' => $allTimelineEvents,
        'nextPage' => route('survey.criminal-justice-followup'),
        'nextPageMessage' => 'Criminal Justice follow-up questions'
      ]);
    }

    public function getExploitationTimeline()
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Exploitation";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        return view('survey.exploitation-timeline', [
          'timelineEvents' => $timelineEvents
        ]);
    }

    public function postExploitationTimeline(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Exploitation";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        foreach ($timelineEvents as $timelineEvent)
        {
            $newTimelineEvent = new TimelineEvent;
            $newTimelineEvent->survey_id = session('survey_id');
            $newTimelineEvent->life_event_id = $timelineEvent->id;
            $newTimelineEvent->timeframe = $request->input('timeframe_' . $timelineEvent->id);
            $newTimelineEvent->age = $request->input('age_' . $timelineEvent->id);
            $newTimelineEvent->year = $request->input('year_' . $timelineEvent->id);
            $newTimelineEvent->range_from = $request->input('range_from_' . $timelineEvent->id);
            $newTimelineEvent->range_to = $request->input('range_to_' . $timelineEvent->id);
            $newTimelineEvent->save();
        }

        return redirect()->route('timeline.exploitation');
    }

    public function getTimelineExploitation()
    {
      $survey_id = session('survey_id');
      $survey = Survey::find($survey_id);
      $category = "Exploitation";
      $eventCategory = EventCategory::where('category', $category)->first();
      $allEventCategories = EventCategory::all();

      $allTimelineEvents = $survey->timeline_events()->with('life_event')
                              ->orderBy('id')
                              ->get();

      return view('survey.timeline.life-events-timeline', [
        'lifeEventCategory' => $category,
        'eventCategories' => $allEventCategories,
        'timelineEvents' => $allTimelineEvents,
        'nextPage' => route('survey.exploitation-followup'),
        'nextPageMessage' => 'Exploitation follow-up questions'
      ]);
    }

    public function getServicesTimeline()
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Services";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        return view('survey.services-timeline', [
          'timelineEvents' => $timelineEvents
        ]);
    }

    public function postServicesTimeline(Request $request)
    {
        $survey_id = session('survey_id');
        $survey = Survey::find($survey_id);
        $category = "Services";
        $eventCategory = EventCategory::where('category', $category)->first();

        $timelineEvents = $survey->life_events()
                                ->where('event_category_id', $eventCategory->id)
                                ->where('timeline', true)
                                ->orderBy('id')
                                ->get();

        foreach ($timelineEvents as $timelineEvent)
        {
            $newTimelineEvent = new TimelineEvent;
            $newTimelineEvent->survey_id = session('survey_id');
            $newTimelineEvent->life_event_id = $timelineEvent->id;
            $newTimelineEvent->timeframe = $request->input('timeframe_' . $timelineEvent->id);
            $newTimelineEvent->age = $request->input('age_' . $timelineEvent->id);
            $newTimelineEvent->year = $request->input('year_' . $timelineEvent->id);
            $newTimelineEvent->range_from = $request->input('range_from_' . $timelineEvent->id);
            $newTimelineEvent->range_to = $request->input('range_to_' . $timelineEvent->id);
            $newTimelineEvent->save();
        }

        return redirect()->route('timeline.services');
    }

    public function getTimelineServices()
    {
      $survey_id = session('survey_id');
      $survey = Survey::find($survey_id);
      $category = "Services";
      $eventCategory = EventCategory::where('category', $category)->first();
      $allEventCategories = EventCategory::all();

      $allTimelineEvents = $survey->timeline_events()->with('life_event')
                              ->orderBy('id')
                              ->get();

      return view('survey.timeline.life-events-timeline', [
        'lifeEventCategory' => $category,
        'eventCategories' => $allEventCategories,
        'timelineEvents' => $allTimelineEvents,
        'nextPage' => route('survey.services-followup'),
        'nextPageMessage' => 'Services follow-up questions'
      ]);
    }

 /*
	    // Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 999;
        $timelineEvent->event_category = "EventCategory";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();
*/
}
