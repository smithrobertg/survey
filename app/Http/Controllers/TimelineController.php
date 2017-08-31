<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimelineEvent;

class TimelineController extends Controller
{
    //
    public function getFamilyBackgroundTimeline()
    {
		$familyBackgoundTimelineEvents = array(
                      "A parent abused you (physically, sexually, or emotionally)",
                      "A parent was arrested",
                      "You experienced homelessness",
                      "You experienced abuse (physical, sexual, or emotional) by a non-parent",
                      "You ran away",
                      "Your family could not afford heat or water (or other basic utilities)",
                      "Your family experienced poverty",
                      "You were addicted to drugs or alcohol (before turning 18)",
                      "Lived in foster care (age entered and age exited)");

        return view('survey.family-background-timeline', [ 'timelineEvents' => $familyBackgoundTimelineEvents ]);
    }

    public function postFamilyBackgroundTimeline(Request $request)
    {
        // A parent abused you (physically, sexually, or emotionally)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 999;
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
        $timelineEvent->survey_id = 999;
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Parent arrested";
        $timelineEvent->timeframe = $request->input('timeframe_parent_arrested');
        $timelineEvent->age = $request->input('age_parent_arrested');
        $timelineEvent->year = $request->input('year_parent_arrested');
        $timelineEvent->range_from = $request->input('range_from_parent_arrested');
        $timelineEvent->range_to = $request->input('range_to_parent_arrested');
        $timelineEvent->save();

        // You experienced homelessness
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 999;
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
        $timelineEvent->survey_id = 999;
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
        $timelineEvent->survey_id = 999;
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
        $timelineEvent->survey_id = 999;
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
        $timelineEvent->survey_id = 999;
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
        $timelineEvent->survey_id = 999;
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Addicted to drugs or alcohol";
        $timelineEvent->timeframe = $request->input('timeframe_addicted_drugs_alcohol');
        $timelineEvent->age = $request->input('age_addicted_drugs_alcohol');
        $timelineEvent->year = $request->input('year_addicted_drugs_alcohol');
        $timelineEvent->range_from = $request->input('range_from_addicted_drugs_alcohol');
        $timelineEvent->range_to = $request->input('range_to_addicted_drugs_alcohol');
        $timelineEvent->save();

        // Lived in foster care (age entered and age exited)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 999;
        $timelineEvent->event_category = "Family Background";
        $timelineEvent->event_description = "Foster care";
        $timelineEvent->timeframe = $request->input('timeframe_foster_care');
        $timelineEvent->age = $request->input('age_foster_care');
        $timelineEvent->year = $request->input('year_foster_care');
        $timelineEvent->range_from = $request->input('range_from_foster_care');
        $timelineEvent->range_to = $request->input('range_to_foster_care');
        $timelineEvent->save();

        return redirect()->route('timeline.family-background-followup');
    }
	
    public function getEducationTimeline()
    {
        return view('survey.education-timeline');
    }

    public function postEducationTimeline(Request $request)
    {
	/*
		• Have to repeat a grade
		• Graduate from high school
		• Get a GED
		• Skip school regularly at any period of time
		• Ever leave school for a period of time
		• Experienced abuse by a teacher (or someone else at school)
	*/

	    // Have to repeat a grade
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Repeat a grade";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_abused_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();

	    // Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_abused_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();
		
	    // Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_abused_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();

	    // Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_abused_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();

	    // Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_abused_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();

	    // Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_abused_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();

	    // Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_abused_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();


        return redirect()->route('timeline.eduction');
    }
 /*
	    // Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_abused_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();
*/


}
