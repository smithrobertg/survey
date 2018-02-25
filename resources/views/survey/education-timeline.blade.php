@extends('layouts.survey')

@section('title', 'Education Timeline')

@section('content')
<h2 class="bg-secondary text-white text-center">TIMELINE OF EDUCATION EVENTS</h2>
@include('partials.timeline-header')

<hr />
<form method="post" action="{{ route('survey.education-timeline') }}">
	{{ csrf_field() }}
	<div class="alert alert-primary border border-primary">
		@each('partials.life-event-timeline', $timelineEvents, 'timelineEvent')
	</div>

	<div class="row">
		<button type="submit" class="btn btn-primary btn-lg mx-auto my-4">Continue to Timeline &rarr;</button>
	</div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '34'])
@endsection
