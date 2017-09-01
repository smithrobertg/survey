@extends('layouts.survey')

@section('title', 'Social Relationships - Timeline')

@section('content')

<h2>TIMELINE OF SOCIAL RELATIONSHIPS</h2>
<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occured.  These events will be populated in timeline.</h3>
  <hr />
<ul>
 	<li>Age first started dating</li>
 	<li>Been married</li>
 	<li>Had a child</li>
 	<li>Experienced violence by a partner</li>
 	<li>Experienced emotional abuse by a partner</li>
 	<li>Lost custody of a child</li>
 	<li>Regained custody of a child</li>
</ul>
<form method="post" action="{{ route('survey.social-relationships-timeline') }}">
	{{ csrf_field() }}
  <fieldset>
    <legend>Age first started dating</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_age_started_dating" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_started_dating" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_started_dating" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_started_dating" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_age_started_dating" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_started_dating" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_started_dating" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
	<legend>Been married</legend>
	<div class="form-row">
		<div class="input-group col-3">
			<span class="input-group-addon">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="timeframe_married" id="timeframeAge" value="Age"> Age
				</label>
			</span>
			<input type="text" class="form-control" name="age_married" />
		</div>
		<div class="input-group col-3">
			<span class="input-group-addon">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="timeframe_married" id="timeframeYear" value="Year"> Year
				</label>
			</span>
			<input type="text" class="form-control" name="year_married" />
		</div>
		<div class="input-group col-6">
			<span class="input-group-addon">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="timeframe_married" id="timeframeRange" value="Range"> Range
				</label>
			</span>
			<span class="input-group-addon">from:</span>
			<input type="text" class="form-control" name="range_from_married" />
			<span class="input-group-addon">to:</span>
			<input type="text" class="form-control" name="range_to_married" />
		</div>
	</div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Had a child</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_had_child" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_had_child" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_had_child" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_had_child" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_had_child" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_had_child" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_had_child" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Experienced violence by a partner</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_violence_by_partner" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_violence_by_partner" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_violence_by_partner" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_violence_by_partner" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_violence_by_partner" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_violence_by_partner" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_violence_by_partner" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Experienced emotional abuse by a partner</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_emotional_abuse_by_partner" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_emotional_abuse_by_partner" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_emotional_abuse_by_partner" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_emotional_abuse_by_partner" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_emotional_abuse_by_partner" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_emotional_abuse_by_partner" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_emotional_abuse_by_partner" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Lost custody of a child</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_lost_custody_of_child" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_lost_custody_of_child" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_lost_custody_of_child" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_lost_custody_of_child" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_lost_custody_of_child" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_lost_custody_of_child" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_lost_custody_of_child" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Regained custody of a child</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_regained_custody_of_child" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_regained_custody_of_child" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_regained_custody_of_child" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_regained_custody_of_child" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_regained_custody_of_child" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_regained_custody_of_child" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_regained_custody_of_child" />
        </div>
    </div>
  </fieldset>

  <hr />

	<div class="row">
		<button class="btn btn-primary mx-auto" type="submit">Save and Continue to Timeline &rarr;</button>
	</div>
</form>
@endsection
