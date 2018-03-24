@extends('layouts.survey')

@section('title', 'Timeline Description')

@section('content')
<h2 class="bg-secondary text-white text-center">TIMELINE DESCRIPTION</h2>
	<div class="alert alert-secondary border border-secondary">
		<p>After completing a few orientation questions about major life events, this survey asks questions about 7 areas of your life to create a <strong>Life Events Calendar</strong>.  This survey is intended to get a better idea of timing of life events in a number of areas in your life, particularly with the transition to adulthood. We will be asking you questions about:</p>
		<ul>
			<li>Family</li>
			<li>School</li>
			<li>Work</li>
			<li>Social relationships</li>
			<li>Criminal justice system involvement</li>
			<li>Exploitation/Sex Trade experiences</li>
			<li>Social services</li>
		</ul>
		<p>In each section, you will be given a list of events and will be asked to check off whether or not any of these things happened in your life. Because we are looking at some events as risk factors, there are a number of events listed that could be seen as negative (such as running away, available social supports, housing trouble) to try to capture the multiple challenges people may have to balance at the same time and how they can influence one another to provide even greater challenges or supports.</p>
		<p>For some of the answers you check, we will ask you about the specific timing that event occurred. This is where the Life Events Calendar comes in. Here’s how the calendar works:</p>
		<hr />
			<h6>Sample Event:</h6>
			<div class="form-group mt-3 ml-5">
				<div class="form-check">
				    <label class="form-check-label">
				        <input class="form-check-input" type="checkbox" name="field_name" value="life_event_id">
				        Quit a job
				    </label>
				</div>
			</div>
			<p>If this happened during a single year, note your Age <input style="width: 50px" /></p>
			<p>If this happened multiple times or over the course of multiple years, note the range of ages:</p>
			<div class="mt-2 ml-5">​
				Range: &nbsp;&nbsp;Ages <input style="width: 50px" /> to <input style="width: 50px" /><br />
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
			<h5>The form entries will look like this:</h5>
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
					  <label for="timeframeDontRemember" class="form-control" name="dont_remember_">I don't remember how old I was</label>
<!--						<input type="text" class="form-control" value="I don't remember how old I was" name="dont_remember_" /> -->
					</div>
				</div>
				</fieldset>
			</div>
			<ul>
				<li>Each of the 7 areas contains multiple form entries like the "Quit a Job" sample above.</li>
				<li>At the completion of of all 7 sections, you will be prompted for your email so that we can send you an <strong>Amazon gift card</strong>.</li>
			</ul>
	</div>

	<div class="row justify-content-center">
		<a href="{{ route('survey.orientation-questions') }}" class="btn btn-primary btn-lg">Continue to Orientation Questions &rarr;</a>
	</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '15'])
@endsection
