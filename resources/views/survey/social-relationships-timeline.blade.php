@extends('layouts.survey-timeline')

@section('title', 'Social Relationships - Timeline')

@section('content')
<h2 class="bg-secondary text-white text-center">TIMELINE OF SOCIAL RELATIONSHIPS</h2>
@include('partials.timeline-header')
<hr />

<form method="post" action="{{ route('survey.social-relationships-timeline') }}">
  	{{ csrf_field() }}
    <div class="alert alert-primary border border-primary">
      @each('partials.life-event-timeline', $timelineEvents, 'timelineEvent')
    </div>
	<div class="row">
		<button class="btn btn-danger mx-auto" type="submit">Save and Continue &rarr;</button>
	</div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '54'])
@endsection
