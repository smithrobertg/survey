@extends('layouts.survey')

@section('title', 'Services - Followup')

@section('content')

<h2>TIMELINE OF SERVICES</h2>
<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occured.  These events will be populated in timeline.</h3>
  <hr />

<form method="post" action="{{ route('survey.services-timeline') }}">
	{{ csrf_field() }}
  <fieldset>
    <legend>Have you ever had a social service agency reach out to you to help?</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_social_service_agency_reached_out" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_social_service_agency_reached_out" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_social_service_agency_reached_out" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_social_service_agency_reached_out" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_social_service_agency_reached_out" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_social_service_agency_reached_out" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_social_service_agency_reached_out" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>substance abuse</strong> services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_substance_abuse_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_substance_abuse_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_substance_abuse_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_substance_abuse_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_substance_abuse_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_substance_abuse_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_substance_abuse_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>mental health</strong> services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_mental_health_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_mental_health_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_mental_health_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_mental_health_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_mental_health_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_mental_health_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_mental_health_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>health care clinic</strong> services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_health_care_clinic_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_health_care_clinic_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_health_care_clinic_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_health_care_clinic_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_health_care_clinic_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_health_care_clinic_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_health_care_clinic_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>Emergency Room</strong> services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_emergency_room_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_emergency_room_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_emergency_room_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_emergency_room_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_emergency_room_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_emergency_room_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_emergency_room_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received services from an agency to exit the commercial sex trade</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_agency_to_exit_commercial_sex_trade" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_agency_to_exit_commercial_sex_trade" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_agency_to_exit_commercial_sex_trade" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_agency_to_exit_commercial_sex_trade" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_agency_to_exit_commercial_sex_trade" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_agency_to_exit_commercial_sex_trade" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_agency_to_exit_commercial_sex_trade" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>domestic violence</strong> services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_domestic_violence_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_domestic_violence_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_domestic_violence_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_domestic_violence_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_domestic_violence_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_domestic_violence_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_domestic_violence_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>sexual assault</strong> services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_sexual_assault_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_sexual_assault_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_sexual_assault_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_sexual_assault_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_sexual_assault_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_sexual_assault_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_sexual_assault_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>legal</strong> services </legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_legal_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_legal_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_legal_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_legal_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_legal_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_legal_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_legal_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>employment</strong> services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_employment_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_employment_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_employment_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_employment_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_employment_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_employment_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_employment_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Family services (child care, custody, etc.)</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_family_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_family_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_family_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_family_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_family_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_family_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_family_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Received <strong>religious-based</strong> services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_religious_based_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_religious_based_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_religious_based_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_religious_based_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_religious_based_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_religious_based_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_religious_based_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Housing services</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_housing_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_housing_services_received" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_housing_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_housing_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_housing_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_housing_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_housing_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Other services not mentioned above?</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_other_services_received" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_other_services_received" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_other_services_received" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_other_services_received" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_other_services_received" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_other_services_received" />
        </div>
    </div>
  </fieldset>

  <hr />

	<div class="row">
		<button class="btn btn-primary mx-auto" type="submit">Save and Continue to Timeline &rarr;</button>
	</div>
</form>
@endsection
