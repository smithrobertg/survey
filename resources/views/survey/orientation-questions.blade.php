@extends('layouts.survey')

@section('title', 'Orientation Questions')

@section('content')
<h2 class="bg-secondary text-white text-center">ORIENTATION QUESTIONS</h2>
<p>First we are going to ask you questions about major events in your life. These events will help orient you to other events in your life. If you are unsure of the timing of these events, just select “I don’t know”</p>
<div class="form">
	<form method="post" action="{{ route('survey.orientation-questions') }}">

		{{ csrf_field() }}

	<div class="alert alert-secondary border border-secondary">
		<div class="form-group">
			<label for="year_born">What year were you born?</label>
			<input type="text" class="form-control" name="year_born" placeholder="Year born">
		</div>
		<div class="form-group">
			<label for="age_started_living_on_own">At what age did you start living on your own (or with a friend/partner), no longer supported by a parent or guardian?</label>
			<input type="text" class="form-control" name="age_started_living_on_own" placeholder="Age started living on own">
		</div>
		<div class="form-group">
			<label for="highest_grade_completed">What is the highest grade you’ve completed?</label>
			<select class="form-control" name="highest_grade_completed">
				<option>Choose one...</option>
				<option>1st</option>
								<option>2nd</option>
								<option>3rd</option>
								<option>4th</option>
								<option>5th</option>
								<option>6th</option>
								<option>7th</option>
								<option>8th</option>
								<option>9th</option>
								<option>10th</option>
								<option>11th</option>
								<option>12th</option>
				<option>some college</option>
				<option>college degree</option>
				<option>graduate degree</option>
			</select>
        </div>
		<div class="form-group">
			<label for="how_old_when_completed_school">How old were you at this time? (or, if easier, What year was this?)</label>
			<input type="text" class="form-control" name="how_old_when_completed_school" placeholder="Age completed highest grade">
		</div>
	</div>
		<div>
			<p>Next, think of specific events that happened in the following 3 stages of your life (childhood, adolescence, and adulthood) where you know how old you were at the time (for example, you moved to a different area, started a relationship, had a child). Fill in those events (just a word or two) here with your age or year.
			For example:</p>
			<ul>
				<li>
					Childhood (between 0-10 years old) Event: stepdad moved in; Age: 7
				</li>
				<li>
					Adolescence (between 11-17 years old) Event: moved to SC; Age: 14
				</li>
				<li>
					Adulthood (18 and over) Event: married RC; Age: OR Year: 21
				</li>
			</ul>
		</div>
		<div class="alert alert-secondary border border-secondary">
			<div class="form-group">
				<label for="childhood_event_description'">Childhood (between 0-10 years old) Event</label>
				<input type="text" class="form-control" name="childhood_event_description" placeholder="Childhood Event">
			</div>
			<div class="form-group">
				<label for="childhood_event_age_or_year">When did this childhood event happen? (Age)</label>
				<input type="text" class="form-control" name="childhood_event_age" placeholder="Age">
			</div>
		</div>

		<div class="alert alert-secondary border border-secondary">
			<div class="form-group">
				<label for="adolescence_event_description">Adolescence (between 11-17 years old) Event</label>
				<input type="text" class="form-control" name="adolescence_event_description" placeholder="Adolescence Event">
			</div>
			<div class="form-group">
				<label for="adolescence_event_age_or_year">When did this adolescence event happen? (Age)</label>
				<input type="text" class="form-control" name="adolescence_event_age" placeholder="Age">
			</div>
		</div>
		<div class="alert alert-secondary border border-secondary">
			<div class="form-group">
				<label for="adulthood_event_description">Adulthood (18 and over) Event</label>
				<input type="text" class="form-control" name="adulthood_event_description" placeholder="Adulthood Event">
			</div>
			<div class="form-group">
				<label for="adulthood_event_age_or_year">When did this adulthood event happen? (Age)</label>
				<input type="text" class="form-control" name="adulthood_event_age" placeholder="Age">
			</div>
		</div>
		<div class="row justify-content-center">
			<button type="submit" class="btn btn-primary col-4">Save and Continue  &rarr;</button>
		</div>
	</form>
</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '18'])
@endsection
