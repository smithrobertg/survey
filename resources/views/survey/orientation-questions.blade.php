@extends('layouts.survey')

@section('title', 'Orientation Questions')

@section('content')

<h2>Orientation Questions</h2>
<p>First we are going to ask you questions about major events in your life. These events will help orient you to other events in your life. If you are unsure of the timing of these events, just select “I don’t know”</p>
<div class="form">
	<form method="post" action="/orientation-questions">

		{{ csrf_field() }}

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
		<button type="submit" class="btn btn-primary">Save and Continue &rarr;</button>
	</form>
</div>

@endsection