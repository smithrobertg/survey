@extends('layouts.survey')

@section('title', 'Orientation Questions')

@section('content')

<h2>Orientation Questions</h2>
<p>First we are going to ask you questions about major events in your life. These events will help orient you to other events in your life. If you are unsure of the timing of these events, just select “I don’t know”</p>
<div class="form">
	<form method="post" action="/orientation-questions">

		{{ csrf_field() }}

	  <div class="form-group">
		<label for="year_born">What year were you born?</label>
		<input type="text" class="form-control" id="year_born" placeholder="Year born">
	  </div>
	  <div class="form-group">
		<label for="age_started_living_on_own">At what age did you start living on your own (or with a friend/partner), no longer supported by a parent or guardian?</label>
		<input type="text" class="form-control" id="age_started_living_on_own" placeholder="Age">
	  </div>
	  <div class="form-group">
		<label for="highest_grade_completed">What is the highest grade you’ve completed?</label>
		<input type="text" class="form-control" id="highest_grade_completed" placeholder="Highest grade">
	  </div>
		<div class="form-group">
			<label for="how_old_when_completed_school">How old were you at this time? (or, if easier, what year was this?</label>
			<input type="text" class="form-control" id="how_old_when_completed_school" placeholder="Age or Year">
		</div>
		<div>
			<p>Next, think of specific events that happened in the following 3 stages of your life (childhood, adolescence, and adulthood) where you know how old you were at the time (for example, you moved to a different area, started a relationship, had a child, . Fill in those events (just a word or two) here with your age or year.
			For example:</p>
			<ul>
				<li>
					Childhood (between 0-10 years old) Event: stepdad moved in; Age: 7 OR Year:
				</li>
				<li>
					Adolescence (between 11-17 years old) Event: moved to SC__; Age:14 ORYear:
				</li>
				<li>
					Adulthood (18 and over) Event: married RC Age: or Year: 2007
				</li>
			</ul>
		</div>
		<div class="form-group">
			<label for="childhood_event_description'">Childhood (between 0-10 years old) Event</label>
			<input type="text" class="form-control" id="childhood_event_description'" placeholder="Childhood Event">
		</div>
		<div class="form-group">
			<label for="childhood_event_age_or_year">Childhood Event: Age OR Year</label>
			<input type="text" class="form-control" id="childhood_event_age_or_year" placeholder="Age or Year">
		</div>
		<div class="form-group">
			<label for="adolescence_event_description">Adolescence (between 11-17 years old) Event</label>
			<input type="text" class="form-control" id="adolescence_event_description" placeholder="Adolescense Event">
		</div>
		<div class="form-group">
			<label for="adolescence_event_age_or_year">Adolescense Event: Age OR Year</label>
			<input type="text" class="form-control" id="adolescence_event_age_or_year" placeholder="Age or Year">
		</div>
		<div class="form-group">
			<label for="adulthood_event_description">Adulthood (18 and over) Event</label>
			<input type="text" class="form-control" id="adulthood_event_description" placeholder="Adulthood Event">
		</div>
		<div class="form-group">
			<label for="adulthood_event_age_or_year">Adulthood Event: Age OR Year</label>
			<input type="text" class="form-control" id="adulthood_event_age_or_year" placeholder="Age or Year">
		</div>


		<button type="submit" class="btn btn-primary">Save and Continue  &rarr;</button>
	</form>
</div>

@endsection

<!--
	What year were you born? __________
 	At what age did you start living on your own (or with a friend/partner), no longer supported by a parent or guardian? ______
 	I don’t know
 	What is the highest grade you’ve completed?
 	Drop down menu: 1st-12th, some college, college degree, graduate degree
 	How old were you at this time?_____ (or, if easier, what year was this?_____)
 	I don’t know
 	Next, think of specific events that happened in the following 3 stages of your life (childhood, adolescence, and adulthood) where you know how old you were at the time (for example, you moved to a different area, started a relationship, had a child, . Fill in those events (just a word or two) here with your age or year.
For example:
 	Childhood (between 0-10 years old) Event: stepdad moved in; Age: 7 OR Year:
 	Adolescence (between 11-17 years old) Event: moved to SC__; Age:14 ORYear:
 	Adulthood (18 and over) Event: married RC Age: or Year: 2007

 	Childhood (between 0-10 years old) Event___________; Age OR Year
 	Adolescence (between 11-17 years old) Event___________; Age OR Year
 	Adulthood (18 and over) Event___________; Age OR Year

'year_born');
'age_started_living_on_own');
'highest_grade_completed');
'how_old_when_completed_school');
'childhood_event_description');
'childhood_event_age_or_year');
'adolescence_event_description');
'adolescence_event_age_or_year');
'adulthood_event_description');
'adulthood_event_age_or_year');

-->