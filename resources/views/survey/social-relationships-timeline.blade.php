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
    <legend>Event</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_" />
        </div>
    </div>
  </fieldset>

  <hr />

    <fieldset>
    <legend>Event</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Event</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Event</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Event</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Event</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_" />
        </div>
    </div>
  </fieldset>

  <hr />

  <fieldset>
    <legend>Event</legend>
    <div class="form-row">
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeAge" value="Age"> Age
                </label>
            </span>
            <input type="text" class="form-control" name="age_" />
        </div>
        <div class="input-group col-3">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeYear" value="Year"> Year
                </label>
            </span>
            <input type="text" class="form-control" name="year_" />
        </div>
        <div class="input-group col-6">
            <span class="input-group-addon">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="timeframe_" id="timeframeRange" value="Range"> Range
                </label>
            </span>
            <span class="input-group-addon">from:</span>
            <input type="text" class="form-control" name="range_from_" />
            <span class="input-group-addon">to:</span>
            <input type="text" class="form-control" name="range_to_" />
        </div>
    </div>
  </fieldset>

  <hr />

	<div class="row">
		<button class="btn btn-primary mx-auto" type="submit">Save and Continue to Timeline &rarr;</button>
	</div>
</form>
@endsection
