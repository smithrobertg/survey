@extends('layouts.survey')

@section('title', 'Education Timeline')

@section('content')
<h2>EDUCATION TIMELINE</h2>

<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occured.  These events will be populated in timeline.</h3>
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
    @include('partials.progress-bar', ['progress' => '24'])
@endsection
