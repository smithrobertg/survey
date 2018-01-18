@extends('layouts.survey')

@section('title', 'Timeline Description')

@section('content')
	<h3 class="text-center">Timeline Description</h3>
	<div class="alert alert-secondary border border-secondary">
		<p>This survey uses a Life Events Calendar to help you recall the timing of specific events in your life. We will be asking you questions about family, school, work, social relationships, any criminal justice system involvement, exploitation experiences, and social services.</p>

		<p>In each section, you will be given a list of events (some positive, some negative) and will be asked to check off whether or not any of these things happened in your life. Because we are looking at risk factors, there are a number of negative events listed to try to capture the multiple struggles people have to sometimes balance at the same time.</p>

		<p>For some of the answers you check, we will ask you about the specific timing that event occurred. This is where the Life Events Calendar comes in. Here’s how the calendar works:</p>

			Sample Event:
			<div class="form-group mt-3 ml-5">
				<div class="form-check">
				    <label class="form-check-label">
				        <input class="form-check-input" type="checkbox" name="field_name" value="life_event_id">
				        Quit a job
				    </label>
				</div>
			</div>
			<p>If this happened during a single year, note your Age ____</p>
			<p>If this happened multiple times or over the course of multiple years, note the range or ranges:</p>
			<div class="mt-2 ml-5">​
				Range 1: Ages ____   to  ____<br />
				​​​​AND<br />
				​Range 2: Ages ____   to  ____<br />
				​​​​AND<br />
				​Range 3: Ages ____   to  ____<br />
				<br />
				If you do not remember the specific age of an event but know that it happened, select:<br />
				<div class="form-group mt-3 ml-2">
					<div class="form-check">
					    <label class="form-check-label">
					        <input class="form-check-input" type="checkbox" name="field_name" value="life_event_id">
									I don’t remember how old I was
					    </label>
					</div>
				</div>
			</div>
			<div class="alert alert-primary border border-primary">
				<fieldset>
				  <legend>Quit a job</legend>
				  <div class="form-row">
				    <div class="input-group col-2">
				      <span class="input-group-addon">
				        <label class="form-check-label">
				          <input class="form-check-input" type="radio" name="timeframe_" id="timeframeAge" value="Age"> Age
				        </label>
				      </span>
				      <input type="text" class="form-control" name="age_" />
				    </div>
					<!--
				    <div class="input-group col-3">
				      <span class="input-group-addon">
				        <label class="form-check-label">
				          <input class="form-check-input" type="radio" name="timeframe_" id="timeframeYear" value="Year"> Year
				        </label>
				      </span>
				      <input type="text" class="form-control" name="year_" />
				    </div>
					-->
				    <div class="input-group col-5">
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
					<div class="input-group col-5">
					  <span class="input-group-addon">
						<label class="form-check-label">
						  <input class="form-check-input" type="radio" name="timeframe_" id="timeframeDontRemember" value="Dont Remember">
						</label>
					  </span>
					  <input type="text" class="form-control" value="Dude, I don't remember when that was." name="dont_remember_" />
					</div>
				</div>
				</fieldset>
			</div>
			<hr />
		You will then be asked if this event happened in childhood, adolescence, or adulthood.
		(Check all that apply)<br />
		<div class="form-group mt-3 ml-5">
			<div class="form-check">
					<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="field_name" value="life_event_id">
							Childhood (0-10 years old)
					</label>
			</div>
			<div class="form-check">
					<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="field_name" value="life_event_id">
							Adolescence (11-17 years old)
					</label>
			</div>
			<div class="form-check">
					<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="field_name" value="life_event_id">
							Adulthood (18+)
					</label>
			</div>
		</div>
		<br />
		(note if they select this option, it will not populate in the event history calendar- only specific age/ranges to populate)
			<p>
				<strong><em>Sample of Event History Calendar populated with this information once we have the grid program</em></strong>
			</p>
	</div>
	<div class="row justify-content-center">
		<a href="{{ route('survey.orientation-questions') }}" class="btn btn-primary btn-lg">Continue to Orientation Questions &rarr;</a>
	</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '15'])
@endsection
