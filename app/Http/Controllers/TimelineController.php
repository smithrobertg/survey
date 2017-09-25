<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\TimelineEvent;
use App\EventCategory;
use App\Education;

class TimelineController extends Controller
{
    //
    public function getFamilyBackgroundTimeline()
    {
        return view('survey.family-background-timeline');
    }

    public function postFamilyBackgroundTimeline(Request $request)
    {
        // A parent abused you (physically, sexually, or emotionally)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Abused by parent";
        $timelineEvent->timeframe = $request->input('timeframe_abused_by_parent');
        $timelineEvent->age = $request->input('age_abused_by_parent');
        $timelineEvent->year = $request->input('year_abused_by_parent');
        $timelineEvent->range_from = $request->input('range_from_abused_by_parent');
        $timelineEvent->range_to = $request->input('range_to_abused_by_parent');
        $timelineEvent->save();

        // A parent was arrested
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Parent arrested";
        $timelineEvent->timeframe = $request->input('timeframe_parent_arrested');
        $timelineEvent->age = $request->input('age_parent_arrested');
        $timelineEvent->year = $request->input('year_parent_arrested');
        $timelineEvent->range_from = $request->input('range_from_parent_arrested');
        $timelineEvent->range_to = $request->input('range_to_parent_arrested');
        $timelineEvent->save();

        // A parent was in prison
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Parent in prison";
        $timelineEvent->timeframe = $request->input('timeframe_parent_in_prison');
        $timelineEvent->age = $request->input('age_parent_in_prison');
        $timelineEvent->year = $request->input('year_parent_in_prison');
        $timelineEvent->range_from = $request->input('range_from_parent_in_prison');
        $timelineEvent->range_to = $request->input('range_to_parent_in_prison');
        $timelineEvent->save();

        // You experienced homelessness
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Homeless";
        $timelineEvent->timeframe = $request->input('timeframe_homeless');
        $timelineEvent->age = $request->input('age_homeless');
        $timelineEvent->year = $request->input('year_homeless');
        $timelineEvent->range_from = $request->input('range_from_homeless');
        $timelineEvent->range_to = $request->input('range_to_homeless');
        $timelineEvent->save();

        // You experienced abuse (physical, sexual, or emotional) by a non-parent
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Abused by non-parent";
        $timelineEvent->timeframe = $request->input('timeframe_abused_by_non_parent');
        $timelineEvent->age = $request->input('age_abused_by_non_parent');
        $timelineEvent->year = $request->input('year_abused_by_non_parent');
        $timelineEvent->range_from = $request->input('range_from_abused_by_non_parent');
        $timelineEvent->range_to = $request->input('range_to_abused_by_non_parent');
        $timelineEvent->save();

        // You ran away
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Ran away";
        $timelineEvent->timeframe = $request->input('timeframe_ran_away');
        $timelineEvent->age = $request->input('age_ran_away');
        $timelineEvent->year = $request->input('year_ran_away');
        $timelineEvent->range_from = $request->input('range_from_ran_away');
        $timelineEvent->range_to = $request->input('range_to_ran_away');
        $timelineEvent->save();

        // Your family could not afford heat or water (or other basic utilities)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Family could not afford heat/water/basic utils";
        $timelineEvent->timeframe = $request->input('timeframe_family_could_not_afford_basic_utils');
        $timelineEvent->age = $request->input('age_family_could_not_afford_basic_utils');
        $timelineEvent->year = $request->input('year_family_could_not_afford_basic_utils');
        $timelineEvent->range_from = $request->input('range_from_family_could_not_afford_basic_utils');
        $timelineEvent->range_to = $request->input('range_to_family_could_not_afford_basic_utils');
        $timelineEvent->save();

        // Your family experienced poverty
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Family poverty";
        $timelineEvent->timeframe = $request->input('timeframe_family_poverty');
        $timelineEvent->age = $request->input('age_family_poverty');
        $timelineEvent->year = $request->input('year_family_poverty');
        $timelineEvent->range_from = $request->input('range_from_family_poverty');
        $timelineEvent->range_to = $request->input('range_to_family_poverty');
        $timelineEvent->save();

        // You were addicted to drugs or alcohol (before turning 18)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Addicted to drugs or alcohol";
        $timelineEvent->timeframe = $request->input('timeframe_addicted_drugs_alcohol');
        $timelineEvent->age = $request->input('age_addicted_drugs_alcohol');
        $timelineEvent->year = $request->input('year_addicted_drugs_alcohol');
        $timelineEvent->range_from = $request->input('range_from_addicted_drugs_alcohol');
        $timelineEvent->range_to = $request->input('range_to_addicted_drugs_alcohol');
        $timelineEvent->save();

        // Exited foster care
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Entered foster care";
        $timelineEvent->timeframe = $request->input('timeframe_entered_foster_care');
        $timelineEvent->age = $request->input('age_entered_foster_care');
        $timelineEvent->year = $request->input('year_entered_foster_care');
        $timelineEvent->range_from = $request->input('range_from_entered_foster_care');
        $timelineEvent->range_to = $request->input('range_to_entered_foster_care');
        $timelineEvent->save();

        // Exited in foster care
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Exited foster care";
        $timelineEvent->timeframe = $request->input('timeframe_exited_foster_care');
        $timelineEvent->age = $request->input('age_exited_foster_care');
        $timelineEvent->year = $request->input('year_exited_foster_care');
        $timelineEvent->range_from = $request->input('range_from_exited_foster_care');
        $timelineEvent->range_to = $request->input('range_to_exited_foster_care');
        $timelineEvent->save();

        return redirect()->route('timeline.family-background');
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

    public function getServicesTimeline()
    {
        return view('survey.services-timeline');
    }

    public function postServicesTimeline(Request $request)
    {
        // Have you ever had a social service agency reach out to you to help?
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Social service agency reached out to help";
        $timelineEvent->timeframe = $request->input('timeframe_social_service_agency_reached_out');
        $timelineEvent->age = $request->input('age_social_service_agency_reached_out');
        $timelineEvent->year = $request->input('year_social_service_agency_reached_out');
        $timelineEvent->range_from = $request->input('range_from_social_service_agency_reached_out');
        $timelineEvent->range_to = $request->input('range_to_social_service_agency_reached_out');
        $timelineEvent->save();

        // Received substance abuse services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Substance abuse services received";
        $timelineEvent->timeframe = $request->input('timeframe_substance_abuse_services_received');
        $timelineEvent->age = $request->input('age_substance_abuse_services_received');
        $timelineEvent->year = $request->input('year_substance_abuse_services_received');
        $timelineEvent->range_from = $request->input('range_from_substance_abuse_services_received');
        $timelineEvent->range_to = $request->input('range_to_substance_abuse_services_received');
        $timelineEvent->save();

        // Received mental health services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Mental health services received";
        $timelineEvent->timeframe = $request->input('timeframe_mental_health_services_received');
        $timelineEvent->age = $request->input('age_mental_health_services_received');
        $timelineEvent->year = $request->input('year_mental_health_services_received');
        $timelineEvent->range_from = $request->input('range_from_mental_health_services_received');
        $timelineEvent->range_to = $request->input('range_to_mental_health_services_received');
        $timelineEvent->save();

        // Received health care clinic services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Health care clinic services received";
        $timelineEvent->timeframe = $request->input('timeframe_health_care_clinic_services_received');
        $timelineEvent->age = $request->input('age_health_care_clinic_services_received');
        $timelineEvent->year = $request->input('year_health_care_clinic_services_received');
        $timelineEvent->range_from = $request->input('range_from_health_care_clinic_services_received');
        $timelineEvent->range_to = $request->input('range_to_health_care_clinic_services_received');
        $timelineEvent->save();

        // Received Emergency Room services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Emergency Room services received";
        $timelineEvent->timeframe = $request->input('timeframe_emergency_room_services_received');
        $timelineEvent->age = $request->input('age_emergency_room_services_received');
        $timelineEvent->year = $request->input('year_emergency_room_services_received');
        $timelineEvent->range_from = $request->input('range_from_emergency_room_services_received');
        $timelineEvent->range_to = $request->input('range_to_emergency_room_services_received');
        $timelineEvent->save();

        // Received services from an agency to exit the commercial sex trade?
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Services received from an agency to exit commercial sex trade";
        $timelineEvent->timeframe = $request->input('timeframe_agency_to_exit_commercial_sex_trade');
        $timelineEvent->age = $request->input('age_agency_to_exit_commercial_sex_trade');
        $timelineEvent->year = $request->input('year_agency_to_exit_commercial_sex_trade');
        $timelineEvent->range_from = $request->input('range_from_agency_to_exit_commercial_sex_trade');
        $timelineEvent->range_to = $request->input('range_to_agency_to_exit_commercial_sex_trade');
        $timelineEvent->save();

        // Domestic violence services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Domestic violence services received";
        $timelineEvent->timeframe = $request->input('timeframe_domestic_violence_services_received');
        $timelineEvent->age = $request->input('age_domestic_violence_services_received');
        $timelineEvent->year = $request->input('year_domestic_violence_services_received');
        $timelineEvent->range_from = $request->input('range_from_domestic_violence_services_received');
        $timelineEvent->range_to = $request->input('range_to_domestic_violence_services_received');
        $timelineEvent->save();

        // Sexual assault services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Sexual assault services received";
        $timelineEvent->timeframe = $request->input('timeframe_sexual_assault_services_received');
        $timelineEvent->age = $request->input('age_sexual_assault_services_received');
        $timelineEvent->year = $request->input('year_sexual_assault_services_received');
        $timelineEvent->range_from = $request->input('range_from_sexual_assault_services_received');
        $timelineEvent->range_to = $request->input('range_to_sexual_assault_services_received');
        $timelineEvent->save();

        // Legal services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Legal services received";
        $timelineEvent->timeframe = $request->input('timeframe_legal_services_received');
        $timelineEvent->age = $request->input('age_legal_services_received');
        $timelineEvent->year = $request->input('year_legal_services_received');
        $timelineEvent->range_from = $request->input('range_from_legal_services_received');
        $timelineEvent->range_to = $request->input('range_to_legal_services_received');
        $timelineEvent->save();

        // Employment services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Employment services received";
        $timelineEvent->timeframe = $request->input('timeframe_employment_services_received');
        $timelineEvent->age = $request->input('age_employment_services_received');
        $timelineEvent->year = $request->input('year_employment_services_received');
        $timelineEvent->range_from = $request->input('range_from_employment_services_received');
        $timelineEvent->range_to = $request->input('range_to_employment_services_received');
        $timelineEvent->save();

        // Family services (child care, custody, etc.)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Family services received";
        $timelineEvent->timeframe = $request->input('timeframe_family_services_received');
        $timelineEvent->age = $request->input('age_family_services_received');
        $timelineEvent->year = $request->input('year_family_services_received');
        $timelineEvent->range_from = $request->input('range_from_family_services_received');
        $timelineEvent->range_to = $request->input('range_to_family_services_received');
        $timelineEvent->save();

        // Religious-based services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Religious-based services received";
        $timelineEvent->timeframe = $request->input('timeframe_religious_based_services_received');
        $timelineEvent->age = $request->input('age_religious_based_services_received');
        $timelineEvent->year = $request->input('year_religious_based_services_received');
        $timelineEvent->range_from = $request->input('range_from_religious_based_services_received');
        $timelineEvent->range_to = $request->input('range_to_religious_based_services_received');
        $timelineEvent->save();

        // Housing services
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Housing services received";
        $timelineEvent->timeframe = $request->input('timeframe_housing_services_received');
        $timelineEvent->age = $request->input('age_housing_services_received');
        $timelineEvent->year = $request->input('year_housing_services_received');
        $timelineEvent->range_from = $request->input('range_from_housing_services_received');
        $timelineEvent->range_to = $request->input('range_to_housing_services_received');
        $timelineEvent->save();

        // Other services not mentioned above?
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Services";
        $timelineEvent->event_description = "Other services received";
        $timelineEvent->timeframe = $request->input('timeframe_other_services_received');
        $timelineEvent->age = $request->input('age_other_services_received');
        $timelineEvent->year = $request->input('year_other_services_received');
        $timelineEvent->range_from = $request->input('range_from_other_services_received');
        $timelineEvent->range_to = $request->input('range_to_other_services_received');
        $timelineEvent->save();

        return redirect()->route('timeline.services');
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
