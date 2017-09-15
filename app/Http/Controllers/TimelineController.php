<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimelineEvent;
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
        // Extract education timeline events array
        $education = Education::where('survey_id', session('survey_id'))->latest()->first();
        $educationTimelineEvents = explode(', ', $education->events);

        return view('survey.education-timeline', [ 'events' => $educationTimelineEvents, 'education_events' => $education->events ]);
    }

    public function postEducationTimeline(Request $request)
    {
		/*	EDUCATION
			---------
			� Have to repeat a grade
			� Graduate from high school
			� Get a GED
			� Skip school regularly at any period of time
			� Ever leave school for a period of time
			� Experienced abuse by a teacher (or someone else at school)
		*/

	    // Have to repeat a grade
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Graduated high school";
        $timelineEvent->timeframe = $request->input('timeframe_graduated_high_school');
        $timelineEvent->age = $request->input('age_graduated_high_school');
        $timelineEvent->year = $request->input('year_graduated_high_school');
        $timelineEvent->range_from = $request->input('range_from_graduated_high_school');
        $timelineEvent->range_to = $request->input('range_to_graduated_high_school');
        $timelineEvent->save();

	    // Get a GED
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Education";
        $timelineEvent->event_description = "Abused by teacher/at school";
        $timelineEvent->timeframe = $request->input('timeframe_abused_at_school');
        $timelineEvent->age = $request->input('age_abused_at_school');
        $timelineEvent->year = $request->input('year_abused_at_school');
        $timelineEvent->range_from = $request->input('range_from_abused_at_school');
        $timelineEvent->range_to = $request->input('range_to_abused_at_school');
        $timelineEvent->save();

        return redirect()->route('timeline.education');
    }

	public function getWorkHousingTimeline()
	{
		return view('survey.work-housing-timeline');
	}

	public function postWorkHousingTimeline(Request $request)
	{
		/*	WORK/HOUSING EVENTS
			-------------------
			� Had trouble finding a job
			� Been employed 40+ hours/week*
			� Been fired from a job
			� Quit a job
			� Received public assistance (food stamps, disability, welfare, etc.)
			� Experienced poverty as an adult
			� Bought a house
			� Ever been evicted
			� Lived with a significant other for financial reasons
			� Lived with a family member for financial reasons
			� Financially supported by a trafficker
		*/

		// Had trouble finding a job
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
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
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Lived with significant other for financial reasons";
        $timelineEvent->timeframe = $request->input('timeframe_lived_with_significant_other_financial_reasons');
        $timelineEvent->age = $request->input('age_lived_with_significant_other_financial_reasons');
        $timelineEvent->year = $request->input('year_lived_with_significant_other_financial_reasons');
        $timelineEvent->range_from = $request->input('range_from_lived_with_significant_other_financial_reasons');
        $timelineEvent->range_to = $request->input('range_to_lived_with_significant_other_financial_reasons');
        $timelineEvent->save();

		// Lived with a family member for financial reasons
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Lived with family member for financial reasons";
        $timelineEvent->timeframe = $request->input('timeframe_lived_with_family_financial_reasons');
        $timelineEvent->age = $request->input('age_lived_with_family_financial_reasons');
        $timelineEvent->year = $request->input('year_lived_with_family_financial_reasons');
        $timelineEvent->range_from = $request->input('range_from_lived_with_family_financial_reasons');
        $timelineEvent->range_to = $request->input('range_to_lived_with_family_financial_reasons');
        $timelineEvent->save();

		// Financially supported by a trafficker
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Work Housing";
        $timelineEvent->event_description = "Financially supported by trafficker";
        $timelineEvent->timeframe = $request->input('timeframe_supported_by_trafficker');
        $timelineEvent->age = $request->input('age_supported_by_trafficker');
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
		    // Age first started dating
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Age started dating";
        $timelineEvent->timeframe = $request->input('timeframe_started_dating');
        $timelineEvent->age = $request->input('age_started_dating');
        $timelineEvent->year = $request->input('year_started_dating');
        $timelineEvent->range_from = $request->input('range_from_started_dating');
        $timelineEvent->range_to = $request->input('range_to_started_dating');
        $timelineEvent->save();

	      // Been married
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Married";
        $timelineEvent->timeframe = $request->input('timeframe_married');
        $timelineEvent->age = $request->input('age_married');
        $timelineEvent->year = $request->input('year_married');
        $timelineEvent->range_from = $request->input('range_from_married');
        $timelineEvent->range_to = $request->input('range_to_married');
        $timelineEvent->save();

	      // Been divorced
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Divorced";
        $timelineEvent->timeframe = $request->input('timeframe_divorced');
        $timelineEvent->age = $request->input('age_divorced');
        $timelineEvent->year = $request->input('year_divorced');
        $timelineEvent->range_from = $request->input('range_from_divorced');
        $timelineEvent->range_to = $request->input('range_to_divorced');
        $timelineEvent->save();

	      // Had a child
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Had a child";
        $timelineEvent->timeframe = $request->input('timeframe_had_child');
        $timelineEvent->age = $request->input('age_had_child');
        $timelineEvent->year = $request->input('year_had_child');
        $timelineEvent->range_from = $request->input('range_from_had_child');
        $timelineEvent->range_to = $request->input('range_to_had_child');
        $timelineEvent->save();

	      // Experienced violence by a partner
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Violence by partner";
        $timelineEvent->timeframe = $request->input('timeframe_violence_by_partner');
        $timelineEvent->age = $request->input('age_violence_by_partner');
        $timelineEvent->year = $request->input('year_violence_by_partner');
        $timelineEvent->range_from = $request->input('range_from_violence_by_partner');
        $timelineEvent->range_to = $request->input('range_to_violence_by_partner');
        $timelineEvent->save();

	      // Experienced emotional abuse by a partner
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Emotional abuse by partner";
        $timelineEvent->timeframe = $request->input('timeframe_emotional_abuse_by_partner');
        $timelineEvent->age = $request->input('age_emotional_abuse_by_partner');
        $timelineEvent->year = $request->input('year_emotional_abuse_by_partner');
        $timelineEvent->range_from = $request->input('range_from_emotional_abuse_by_partner');
        $timelineEvent->range_to = $request->input('range_to_emotional_abuse_by_partner');
        $timelineEvent->save();

        // Experienced death of a spouse
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Death of spouse";
        $timelineEvent->timeframe = $request->input('timeframe_death_of_spouse');
        $timelineEvent->age = $request->input('age_death_of_spouse');
        $timelineEvent->year = $request->input('year_death_of_spouse');
        $timelineEvent->range_from = $request->input('range_from_death_of_spouse');
        $timelineEvent->range_to = $request->input('range_to_death_of_spouse');
        $timelineEvent->save();

	      // Lost custody of a child
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Lost custody of child";
        $timelineEvent->timeframe = $request->input('timeframe_lost_custody_of_child');
        $timelineEvent->age = $request->input('age_lost_custody_of_child');
        $timelineEvent->year = $request->input('year_lost_custody_of_child');
        $timelineEvent->range_from = $request->input('range_from_lost_custody_of_child');
        $timelineEvent->range_to = $request->input('range_to_lost_custody_of_child');
        $timelineEvent->save();

	      // Regained custody of a child
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Social Relationships";
        $timelineEvent->event_description = "Regained custody of child";
        $timelineEvent->timeframe = $request->input('timeframe_regained_custody_of_child');
        $timelineEvent->age = $request->input('age_regained_custody_of_child');
        $timelineEvent->year = $request->input('year_regained_custody_of_child');
        $timelineEvent->range_from = $request->input('range_from_regained_custody_of_child');
        $timelineEvent->range_to = $request->input('range_to_regained_custody_of_child');
        $timelineEvent->save();

        return redirect()->route('timeline.social-relationships');
    }

    public function getCriminalJusticeTimeline()
    {
        return view('survey.criminal-justice-timeline');
    }

    public function postCriminalJusticeTimeline(Request $request)
    {
        // Ever been arrested
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Criminal Justice";
        $timelineEvent->event_description = "Arrested";
        $timelineEvent->timeframe = $request->input('timeframe_arrested');
        $timelineEvent->age = $request->input('age_arrested');
        $timelineEvent->year = $request->input('year_arrested');
        $timelineEvent->range_from = $request->input('range_from_arrested');
        $timelineEvent->range_to = $request->input('range_to_arrested');
        $timelineEvent->save();

        // Ever been incarcerated (been to prison or jail)
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Criminal Justice";
        $timelineEvent->event_description = "Incarcerated";
        $timelineEvent->timeframe = $request->input('timeframe_incarcerated');
        $timelineEvent->age = $request->input('age_incarcerated');
        $timelineEvent->year = $request->input('year_incarcerated');
        $timelineEvent->range_from = $request->input('range_from_incarcerated');
        $timelineEvent->range_to = $request->input('range_to_incarcerated');
        $timelineEvent->save();

        // Ever been solicited/asked to do anything sexual by a police officer
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Criminal Justice";
        $timelineEvent->event_description = "Socilited sexually by police officer";
        $timelineEvent->timeframe = $request->input('timeframe_socilited_sexually_by_police_officer');
        $timelineEvent->age = $request->input('age_socilited_sexually_by_police_officer');
        $timelineEvent->year = $request->input('year_socilited_sexually_by_police_officer');
        $timelineEvent->range_from = $request->input('range_from_socilited_sexually_by_police_officer');
        $timelineEvent->range_to = $request->input('range_to_socilited_sexually_by_police_officer');
        $timelineEvent->save();

        return redirect()->route('timeline.criminal-justice');
    }

    public function getExploitationTimeline()
    {
        return view('survey.exploitation-timeline');
    }

    public function postExploitationTimeline(Request $request)
    {
        // Time period(s) of selling or exchanging sex
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Selling/exchanging sex";
        $timelineEvent->timeframe = $request->input('timeframe_selling_sex');
        $timelineEvent->age = $request->input('age_selling_sex');
        $timelineEvent->year = $request->input('year_selling_sex');
        $timelineEvent->range_from = $request->input('range_from_selling_sex');
        $timelineEvent->range_to = $request->input('range_to_selling_sex');
        $timelineEvent->save();

        // Asked by a family member to exchange sexual favors for money, drugs, or other compensation
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Asked by family member to exchange sex";
        $timelineEvent->timeframe = $request->input('timeframe_asked_by_family_to_exchange_sex');
        $timelineEvent->age = $request->input('age_asked_by_family_to_exchange_sex');
        $timelineEvent->year = $request->input('year_asked_by_family_to_exchange_sex');
        $timelineEvent->range_from = $request->input('range_from_asked_by_family_to_exchange_sex');
        $timelineEvent->range_to = $request->input('range_to_asked_by_family_to_exchange_sex');
        $timelineEvent->save();

        // Had a romantic relationship with someone who sold you for sex?
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Romantic relationhip with someone who sold you for sex";
        $timelineEvent->timeframe = $request->input('timeframe_romantic_relationship_with_someone_sold_you_for_sex');
        $timelineEvent->age = $request->input('age_romantic_relationship_with_someone_sold_you_for_sex');
        $timelineEvent->year = $request->input('year_romantic_relationship_with_someone_sold_you_for_sex');
        $timelineEvent->range_from = $request->input('range_from_romantic_relationship_with_someone_sold_you_for_sex');
        $timelineEvent->range_to = $request->input('range_to_romantic_relationship_with_someone_sold_you_for_sex');
        $timelineEvent->save();

        // Experienced violence by a pimp
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Violence by pimp";
        $timelineEvent->timeframe = $request->input('timeframe_violence_by_pimp');
        $timelineEvent->age = $request->input('age_violence_by_pimp');
        $timelineEvent->year = $request->input('year_violence_by_pimp');
        $timelineEvent->range_from = $request->input('range_from_violence_by_pimp');
        $timelineEvent->range_to = $request->input('range_to_violence_by_pimp');
        $timelineEvent->save();

        // Experienced violence by a client
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Violence by client";
        $timelineEvent->timeframe = $request->input('timeframe_violence_by_client');
        $timelineEvent->age = $request->input('age_violence_by_client');
        $timelineEvent->year = $request->input('year_violence_by_client');
        $timelineEvent->range_from = $request->input('range_from_violence_by_client');
        $timelineEvent->range_to = $request->input('range_to_violence_by_client');
        $timelineEvent->save();

        // Ever been stalked
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Stalked";
        $timelineEvent->timeframe = $request->input('timeframe_stalked');
        $timelineEvent->age = $request->input('age_stalked');
        $timelineEvent->year = $request->input('year_stalked');
        $timelineEvent->range_from = $request->input('range_from_stalked');
        $timelineEvent->range_to = $request->input('range_to_stalked');
        $timelineEvent->save();

        // Ever feel like your life was threatened
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Felt life threatened";
        $timelineEvent->timeframe = $request->input('timeframe_felt_life_threatened');
        $timelineEvent->age = $request->input('age_felt_life_threatened');
        $timelineEvent->year = $request->input('year_felt_life_threatened');
        $timelineEvent->range_from = $request->input('range_from_felt_life_threatened');
        $timelineEvent->range_to = $request->input('range_to_felt_life_threatened');
        $timelineEvent->save();

        // Ever tried to leave the sex trade
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Tried to leave sex trade";
        $timelineEvent->timeframe = $request->input('timeframe_tried_to_leave_sex_trade');
        $timelineEvent->age = $request->input('age_tried_to_leave_sex_trade');
        $timelineEvent->year = $request->input('year_tried_to_leave_sex_trade');
        $timelineEvent->range_from = $request->input('range_from_tried_to_leave_sex_trade');
        $timelineEvent->range_to = $request->input('range_to_tried_to_leave_sex_trade');
        $timelineEvent->save();

        // Did you return to/were brought back into selling/exchanging sex?
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Returned to sex trade";
        $timelineEvent->timeframe = $request->input('timeframe_returned_to_sex_trade');
        $timelineEvent->age = $request->input('age_returned_to_sex_trade');
        $timelineEvent->year = $request->input('year_returned_to_sex_trade');
        $timelineEvent->range_from = $request->input('range_from_returned_to_sex_trade');
        $timelineEvent->range_to = $request->input('range_to_returned_to_sex_trade');
        $timelineEvent->save();

        // Used substances (drugs, alcohol) to cope
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Used substances to cope";
        $timelineEvent->timeframe = $request->input('timeframe_used_substances_to_cope');
        $timelineEvent->age = $request->input('age_used_substances_to_cope');
        $timelineEvent->year = $request->input('year_used_substances_to_cope');
        $timelineEvent->range_from = $request->input('range_from_used_substances_to_cope');
        $timelineEvent->range_to = $request->input('range_to_used_substances_to_cope');
        $timelineEvent->save();

        // Ever been hospitalized for drug or alcohol use
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Hospitalized for drug/alcohol use";
        $timelineEvent->timeframe = $request->input('timeframe_hospitalized_for_drug_alcohol_use');
        $timelineEvent->age = $request->input('age_hospitalized_for_drug_alcohol_use');
        $timelineEvent->year = $request->input('year_hospitalized_for_drug_alcohol_use');
        $timelineEvent->range_from = $request->input('range_from_hospitalized_for_drug_alcohol_use');
        $timelineEvent->range_to = $request->input('range_to_hospitalized_for_drug_alcohol_use');
        $timelineEvent->save();

        // Struggled with depression, anxiety, post-traumatic stress disorder or other mental health issues
        $timelineEvent = new TimelineEvent;
        $timelineEvent->survey_id = session('survey_id');
        $timelineEvent->event_category = "Exploitation";
        $timelineEvent->event_description = "Struggled with depression/anxiety/ptsd/mental health issues";
        $timelineEvent->timeframe = $request->input('timeframe_struggled_with_mental_health_issues');
        $timelineEvent->age = $request->input('age_struggled_with_mental_health_issues');
        $timelineEvent->year = $request->input('year_struggled_with_mental_health_issues');
        $timelineEvent->range_from = $request->input('range_from_struggled_with_mental_health_issues');
        $timelineEvent->range_to = $request->input('range_to_struggled_with_mental_health_issues');
        $timelineEvent->save();

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
