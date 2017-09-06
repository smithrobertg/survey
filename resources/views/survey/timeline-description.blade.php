@extends('layouts.survey')

@section('title', 'Timeline Description')

@section('content')
	<p>This survey uses a Life Events Calendar to help you recall the timing of specific events in your life. We will be asking you questions about family, school, work, social relationships, any criminal justice system involvement, exploitation experiences, and social services.</p>

	<p>In each section, you will be given a list of events (some positive, some negative) and will be asked to check off whether or not any of these things happened in your life. Because we are looking at risk factors, there are a number of negative events listed to try to capture the multiple struggles people have to sometimes balance at the same time.</p>

	<p>For some of the answers you check, we will ask you about the specific timing that event occurred. This is where the Life Events Calendar comes in. Here’s how the calendar works:</p>

Sample Event: Quit a job
If this happened during a single year, note your Age ____
If this happened multiple times or over the course of multiple years, note the range or ranges:
​Range 1: Ages ____   to  ____
​​​​AND
​Range 2: Ages ____   to  ____
​​​​AND
​Range 3: Ages ____   to  ____

If you do not remember the specific age of an event but know that it happened, select:

• I don’t remember how old I was

You will then be asked if this event happened in childhood, adolescence, or adulthood.
(Check all that apply)
___ Childhood (0-10 years old)
___ Adolescence (11-17 years old)
___ Adulthood (18+)
(note if they select this option, it will not populate in the event history calendar- only specific age/ranges to populate)
	<p>
		<strong><em>Sample of Event History Calendar populated with this information once we have the grid program</em></strong>
	</p>

	<div class="row justify-content-center">
		<a href="{{ route('survey.orientation-questions') }}" class="btn btn-success btn-lg">Continue to Orientation Questions &rarr;</a>
	</div>
@endsection
