
@extends('layouts.survey')

@section('title', 'Education Timeline')

@section('content')

<h1>Education Timeline</h1>

<div class="alert alert-primary border border-primary">
  @each('partials.timeline-event', $timelineEvents, 'timelineEvent')
</div>

<a href="{{ route('survey.work-housing') }}" class="btn btn-primary">Continue to Work/Housing Events &rarr;</a>

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '36'])
@endsection
