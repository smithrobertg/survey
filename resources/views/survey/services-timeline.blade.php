@extends('layouts.survey')

@section('title', 'Services - Followup')

@section('content')

<h2 class="bg-secondary text-white text-center">SERVICES TIMELINE</h2>
<h5 class="bg-primary text-white p-3">For each of these questions, please enter AGE or RANGE the event(s) occured.  These events will be populated in timeline.</h3>

<form method="post" action="{{ route('survey.services-timeline') }}">
    {{ csrf_field() }}
    
    <div class="alert alert-primary border border-primary">
		@each('partials.life-event-timeline', $timelineEvents, 'timelineEvent')
	</div>

	<div class="row">
		<button type="submit" class="btn btn-primary btn-lg mx-auto my-4">Save &amp; Continue to Timeline &rarr;</button>
	</div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '87'])
@endsection
