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
		/*	EDUCATION
			---------
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
        $timelineEvent->event_description = "Repeated grade";
        $timelineEvent->timeframe = $request->input('timeframe_repeated_grade');
        $timelineEvent->age = $request->input('age_repeated_grade');
        $timelineEvent->year = $request->input('year_repeated_grade');
        $timelineEvent->range_from = $request->input('range_from_repeated_grade');
        $timelineEvent->range_to = $request->input('range_to_repeated_grade');
        $timelineEvent->save();

	    // Graduate from high school
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Graduated high school";
        $timelineEvent->timeframe = $request->input('timeframe_graduated_high_school');
        $timelineEvent->age = $request->input('age_abused_graduated_high_school');
        $timelineEvent->year = $request->input('year_graduated_high_school');
        $timelineEvent->range_from = $request->input('range_from_graduated_high_school');
        $timelineEvent->range_to = $request->input('range_to_graduated_high_school');
        $timelineEvent->save();
		
	    // Get a GED
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Got GED";
        $timelineEvent->timeframe = $request->input('timeframe_got_ged');
        $timelineEvent->age = $request->input('age_got_ged');
        $timelineEvent->year = $request->input('year_got_ged');
        $timelineEvent->range_from = $request->input('range_from_got_ged');
        $timelineEvent->range_to = $request->input('range_to_got_ged');
        $timelineEvent->save();

	    // Skip school regularly at any period of time
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Skip school regularly";
        $timelineEvent->timeframe = $request->input('timeframe_skip_school_regularly');
        $timelineEvent->age = $request->input('age_skip_school_regularly');
        $timelineEvent->year = $request->input('year_skip_school_regularly');
        $timelineEvent->range_from = $request->input('range_from_skip_school_regularly');
        $timelineEvent->range_to = $request->input('range_to_skip_school_regularly');
        $timelineEvent->save();

	    // Ever leave school for a period of time
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Leave school for period of time";
        $timelineEvent->timeframe = $request->input('timeframe_leave_school');
        $timelineEvent->age = $request->input('age_leave_school');
        $timelineEvent->year = $request->input('year_leave_school');
        $timelineEvent->range_from = $request->input('range_from_leave_school');
        $timelineEvent->range_to = $request->input('range_to_leave_school');
        $timelineEvent->save();

	    // Experienced abuse by a teacher (or someone else at school)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 998;
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Abused by teacher/at school";
        $timelineEvent->timeframe = $request->input('timeframe_abused_at_school');
        $timelineEvent->age = $request->input('age_abused_abused_at_school');
        $timelineEvent->year = $request->input('year_abused_at_school');
        $timelineEvent->range_from = $request->input('range_from_abused_at_school');
        $timelineEvent->range_to = $request->input('range_to_abused_at_school');
        $timelineEvent->save();

        return redirect()->route('timeline.eduction');
    }

	public function getWorkHousingTimeline()
	{
		return view('survey.work-housing-timeline');
	}

	public function postWorkHousingTimeline(Request $request)
	{
		/*	WORK/HOUSING EVENTS
			-------------------
			• Had trouble finding a job
			• Been employed 40+ hours/week*
			• Been fired from a job
			• Quit a job
			• Received public assistance (food stamps, disability, welfare, etc.)
			• Experienced poverty as an adult
			• Bought a house
			• Ever been evicted
			• Lived with a significant other for financial reasons
			• Lived with a family member for financial reasons
			• Financially supported by a trafficker
		*/

		// Had trouble finding a job
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Trouble finding job";
        $timelineEvent->timeframe = $request->input('timeframe_trouble_finding_job');
        $timelineEvent->age = $request->input('age_trouble_finding_job');
        $timelineEvent->year = $request->input('year_trouble_finding_job');
        $timelineEvent->range_from = $request->input('range_from_trouble_finding_job');
        $timelineEvent->range_to = $request->input('range_to_trouble_finding_job');
        $timelineEvent->save();

		// Been employed 40+ hours/week*
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Employed 40+ hours/week";
        $timelineEvent->timeframe = $request->input('timeframe_employed40hours_week');
        $timelineEvent->age = $request->input('age_employed40hours_week');
        $timelineEvent->year = $request->input('year_employed40hours_week');
        $timelineEvent->range_from = $request->input('range_from_employed40hours_week');
        $timelineEvent->range_to = $request->input('range_to_employed40hours_week');
        $timelineEvent->save();

		// Been fired from a job
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Fired from a job";
        $timelineEvent->timeframe = $request->input('timeframe_fired_from_job');
        $timelineEvent->age = $request->input('age_fired_from_job');
        $timelineEvent->year = $request->input('year_fired_from_job');
        $timelineEvent->range_from = $request->input('range_from_fired_from_job');
        $timelineEvent->range_to = $request->input('range_to_fired_from_job');
        $timelineEvent->save();

		// Quit a job
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Quit a job";
        $timelineEvent->timeframe = $request->input('timeframe_quit_job');
        $timelineEvent->age = $request->input('age_quit_job');
        $timelineEvent->year = $request->input('year_quit_job');
        $timelineEvent->range_from = $request->input('range_from_quit_job');
        $timelineEvent->range_to = $request->input('range_to_quit_job');
        $timelineEvent->save();

		// Received public assistance (food stamps, disability, welfare, etc.)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Received public assistance";
        $timelineEvent->timeframe = $request->input('timeframe_received_public_assistance');
        $timelineEvent->age = $request->input('age_received_public_assistance');
        $timelineEvent->year = $request->input('year_received_public_assistance');
        $timelineEvent->range_from = $request->input('range_from_received_public_assistance');
        $timelineEvent->range_to = $request->input('range_to_received_public_assistance');
        $timelineEvent->save();

		// Experienced poverty as an adult
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Poverty as adult";
        $timelineEvent->timeframe = $request->input('timeframe_poverty_as_adult');
        $timelineEvent->age = $request->input('age_poverty_as_adult');
        $timelineEvent->year = $request->input('year_poverty_as_adult');
        $timelineEvent->range_from = $request->input('range_from_poverty_as_adult');
        $timelineEvent->range_to = $request->input('range_to_poverty_as_adult');
        $timelineEvent->save();

		// Bought a house
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Bought house";
        $timelineEvent->timeframe = $request->input('timeframe_bought_house');
        $timelineEvent->age = $request->input('age_bought_house');
        $timelineEvent->year = $request->input('year_bought_house');
        $timelineEvent->range_from = $request->input('range_from_bought_house');
        $timelineEvent->range_to = $request->input('range_to_bought_house');
        $timelineEvent->save();

		// Ever been evicted
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Evicted";
        $timelineEvent->timeframe = $request->input('timeframe_evicted');
        $timelineEvent->age = $request->input('age_evicted');
        $timelineEvent->year = $request->input('year_evicted');
        $timelineEvent->range_from = $request->input('range_from_evicted');
        $timelineEvent->range_to = $request->input('range_to_evicted');
        $timelineEvent->save();

		// Lived with a significant other for financial reasons
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Lived with significant other for financial reasons";
        $timelineEvent->timeframe = $request->input('timeframe_lived_with_significant_other_financial_reasons');
        $timelineEvent->age = $request->input('age_abused_lived_with_significant_other_financial_reasons');
        $timelineEvent->year = $request->input('year_lived_with_significant_other_financial_reasons');
        $timelineEvent->range_from = $request->input('range_from_lived_with_significant_other_financial_reasons');
        $timelineEvent->range_to = $request->input('range_to_lived_with_significant_other_financial_reasons');
        $timelineEvent->save();

		// Lived with a family member for financial reasons
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Lived with family member for financial reasons";
        $timelineEvent->timeframe = $request->input('timeframe_lived_with_family_financial_reasons');
        $timelineEvent->age = $request->input('age_abused_lived_with_family_financial_reasons');
        $timelineEvent->year = $request->input('year_lived_with_family_financial_reasons');
        $timelineEvent->range_from = $request->input('range_from_lived_with_family_financial_reasons');
        $timelineEvent->range_to = $request->input('range_to_lived_with_family_financial_reasons');
        $timelineEvent->save();

		// Financially supported by a trafficker
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 997;
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Financially supported by trafficker";
        $timelineEvent->timeframe = $request->input('timeframe_supported_by_trafficker');
        $timelineEvent->age = $request->input('age_abused_supported_by_trafficker');
        $timelineEvent->year = $request->input('year_supported_by_trafficker');
        $timelineEvent->range_from = $request->input('range_from_supported_by_trafficker');
        $timelineEvent->range_to = $request->input('range_to_supported_by_trafficker');
        $timelineEvent->save();

		return redirect()->route('timeline.work-housing');
	}
	
    public function getSocialRelationshipsTimeline()
    {
        return view('survey.social-relationships-timeline');
    }

    public function postSocialRelationshipsTimeline(Request $request)
    {
		// Event
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = 996;
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Event";
        $timelineEvent->timeframe = $request->input('timeframe_');
        $timelineEvent->age = $request->input('age_');
        $timelineEvent->year = $request->input('year_');
        $timelineEvent->range_from = $request->input('range_from_');
        $timelineEvent->range_to = $request->input('range_to_');
        $timelineEvent->save();

        return redirect()->route('timeline.social-relationships');
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
