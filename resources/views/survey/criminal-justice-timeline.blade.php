@extends('layouts.survey')

@section('title', 'Criminal Justice System - Timeline')

@section('content')

	<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occured.  These events will be populated in timeline.</h3>
	  <hr />
	<!--
	• Ever been arrested
	• Ever been incarcerated (been to prison or jail)
	• Ever been solicited/asked to do anything sexual by a police officer
	-->
<form method="post" action="{{ route('survey.criminal-justice-timeline') }}">
	{{ csrf_field() }}
  <fieldset>
    <legend>Ever been arrested</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_arrested" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_arrested" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_arrested" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_arrested" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_arrested" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_arrested" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_arrested" />
        </div>
    </div>
  </fieldset>

  <hr />

	<fieldset>
    <legend>Ever been incarcerated (been to prison or jail)</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_incarcerated" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_incarcerated" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_incarcerated" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_incarcerated" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_incarcerated" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_incarcerated" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_incarcerated" />
        </div>
    </div>
  </fieldset>

  <hr />

	<fieldset>
    <legend>Ever been solicited/asked to do anything sexual by a police officer</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_socilited_sexually_by_police_officer" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_socilited_sexually_by_police_officer" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_socilited_sexually_by_police_officer" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_socilited_sexually_by_police_officer" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_socilited_sexually_by_police_officer" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_socilited_sexually_by_police_officer" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_socilited_sexually_by_police_officer" />
        </div>
    </div>
  </fieldset>

  <hr />

	<div class="row">
		<button class="btn btn-primary mx-auto" type="submit">Save and Continue to Timeline &rarr;</button>
	</div>
</form>

@endsection
