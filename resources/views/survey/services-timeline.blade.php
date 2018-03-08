@extends('layouts.survey-timeline')

@section('title', 'Services - Followup')

@section('content')

<h2 class="bg-secondary text-white text-center">SERVICES TIMELINE</h2>
@include('partials.timeline-header')

<form method="post" action="{{ route('survey.services-timeline') }}">
    {{ csrf_field() }}
    
    <div class="alert alert-primary border border-primary">
		@each('partials.life-event-timeline', $timelineEvents, 'timelineEvent')
	</div>

	<div class="row">
		<button type="submit" class="btn btn-danger btn-lg mx-auto my-4">Save &amp; Continue &rarr;</button>
	</div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '87'])
@endsection
