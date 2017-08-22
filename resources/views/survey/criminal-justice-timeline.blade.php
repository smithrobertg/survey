@extends('layouts.survey')

@section('title', 'Criminal Justice System - Timeline')

@section('content')

<h2>TIMELINE OF CRIMINAL JUSTICE EVENTS</h2>
<form method="post" action="/criminal-justice-timeline">
	{{ csrf_field() }}
	<p>For any of these questions, checked, present option for AGE, YEAR, RANGE and (hopefully) automatically populate in timeline.</p>

	Ever been arrested
	Ever been incarcerated (been to prison or jail)
	Ever been solicited/asked to do anything sexual by a police officer

	<button class="btn btn-primary" type="submit">Continue to Timeline &rarr;</button>

</form>
@endsection