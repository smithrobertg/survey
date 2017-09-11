@extends('layouts.survey')

@section('title', 'Education Timeline')

@section('content')
<h2>EDUCATION TIMELINE</h2>

<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occured.  These events will be populated in timeline.</h3>
<hr />
<form method="post" action="{{ route('survey.education-timeline') }}">
		{{ csrf_field() }}
		<fieldset>
			<legend>Have to repeat a grade</legend>
			<div class="form-row">
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_repeated_grade" id="timeframeAge" value="Age"> Age
						</label>
					</span>
					<input type="text" class="form-control" name="age_repeated_grade" />
				</div>
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_repeated_grade" id="timeframeYear" value="Year"> Year
						</label>
					</span>
					<input type="text" class="form-control" name="year_repeated_grade" />
				</div>
				<div class="input-group col-6">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_repeated_grade" id="timeframeRange" value="Range"> Range
						</label>
					</span>
					<span class="input-group-addon">from:</span>
					<input type="text" class="form-control" name="range_from_repeated_grade" />
					<span class="input-group-addon">to:</span>
					<input type="text" class="form-control" name="range_to_repeated_grade" />
				</div>
			</div>
		</fieldset>

		<hr />

		<fieldset>
			<legend>Graduate from high school</legend>
			<div class="form-row">
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_graduated_high_school" id="timeframeAge" value="Age"> Age
						</label>
					</span>
					<input type="text" class="form-control" name="age_graduated_high_school" />
				</div>
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_graduated_high_school" id="timeframeYear" value="Year"> Year
						</label>
					</span>
					<input type="text" class="form-control" name="year_graduated_high_school" />
				</div>
				<div class="input-group col-6">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_graduated_high_school" id="timeframeRange" value="Range"> Range
						</label>
					</span>
					<span class="input-group-addon">from:</span>
					<input type="text" class="form-control" name="range_from_graduated_high_school" />
					<span class="input-group-addon">to:</span>
					<input type="text" class="form-control" name="range_to_graduated_high_school" />
				</div>
			</div>
		</fieldset>

		<hr />

		<fieldset>
			<legend>Get a GED</legend>
			<div class="form-row">
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_got_ged" id="timeframeAge" value="Age"> Age
						</label>
					</span>
					<input type="text" class="form-control" name="age_got_ged" />
				</div>
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_got_ged" id="timeframeYear" value="Year"> Year
						</label>
					</span>
					<input type="text" class="form-control" name="year_got_ged" />
				</div>
				<div class="input-group col-6">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_got_ged" id="timeframeRange" value="Range"> Range
						</label>
					</span>
					<span class="input-group-addon">from:</span>
					<input type="text" class="form-control" name="range_from_got_ged" />
					<span class="input-group-addon">to:</span>
					<input type="text" class="form-control" name="range_to_got_ged" />
				</div>
			</div>
		</fieldset>

		<hr />

		<fieldset>
			<legend>Skip school regularly at any period of time</legend>
			<div class="form-row">
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_skip_school_regularly" id="timeframeAge" value="Age"> Age
						</label>
					</span>
					<input type="text" class="form-control" name="age_skip_school_regularly" />
				</div>
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_skip_school_regularly" id="timeframeYear" value="Year"> Year
						</label>
					</span>
					<input type="text" class="form-control" name="year_skip_school_regularly" />
				</div>
				<div class="input-group col-6">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_skip_school_regularly" id="timeframeRange" value="Range"> Range
						</label>
					</span>
					<span class="input-group-addon">from:</span>
					<input type="text" class="form-control" name="range_from_skip_school_regularly" />
					<span class="input-group-addon">to:</span>
					<input type="text" class="form-control" name="range_to_skip_school_regularly" />
				</div>
			</div>
		</fieldset>

		<hr />

		<fieldset>
			<legend>Ever leave school for a period of time</legend>
			<div class="form-row">
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_leave_school" id="timeframeAge" value="Age"> Age
						</label>
					</span>
					<input type="text" class="form-control" name="age_leave_school" />
				</div>
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_leave_school" id="timeframeYear" value="Year"> Year
						</label>
					</span>
					<input type="text" class="form-control" name="year_leave_school" />
				</div>
				<div class="input-group col-6">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_leave_school" id="timeframeRange" value="Range"> Range
						</label>
					</span>
					<span class="input-group-addon">from:</span>
					<input type="text" class="form-control" name="range_from_leave_school" />
					<span class="input-group-addon">to:</span>
					<input type="text" class="form-control" name="range_to_leave_school" />
				</div>
			</div>
		</fieldset>

		<hr />

		<fieldset>
			<legend>Experienced abuse by a teacher (or someone else at school)</legend>
			<div class="form-row">
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_abused_at_school" id="timeframeAge" value="Age"> Age
						</label>
					</span>
					<input type="text" class="form-control" name="age_abused_at_school" />
				</div>
				<div class="input-group col-3">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_abused_at_school" id="timeframeYear" value="Year"> Year
						</label>
					</span>
					<input type="text" class="form-control" name="year_abused_at_school" />
				</div>
				<div class="input-group col-6">
					<span class="input-group-addon">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="timeframe_abused_at_school" id="timeframeRange" value="Range"> Range
						</label>
					</span>
					<span class="input-group-addon">from:</span>
					<input type="text" class="form-control" name="range_from_abused_at_school" />
					<span class="input-group-addon">to:</span>
					<input type="text" class="form-control" name="range_to_abused_at_school" />
				</div>
			</div>
		</fieldset>

		<hr />

	<div class="row">
		<button type="submit" class="btn btn-primary btn-lg mx-auto my-4">Continue to Timeline &rarr;</button>
	</div>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '24'])
@endsection
