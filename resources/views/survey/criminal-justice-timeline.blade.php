@extends('layouts.survey')

@section('title', 'Criminal Justice System - Timeline')

@section('content')
<h2 class="bg-secondary text-white text-center">TIMELINE OF CRIMINAL JUSTICE EVENTS</h2>
<h5 class="bg-primary text-white p-3">For each of these questions, please enter AGE or RANGE the event(s) occured.  These events will be populated in timeline.</h3>

	<form method="post" action="{{ route('survey.criminal-justice-timeline') }}">
	{{ csrf_field() }}
	<div class="alert alert-primary border border-primary">
		@each('partials.life-event-timeline', $timelineEvents, 'timelineEvent')
	</div>

	<div class="row">
		<button class="btn btn-primary mx-auto" type="submit">Save and Continue to Timeline &rarr;</button>
	</div>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '63'])
@endsection
