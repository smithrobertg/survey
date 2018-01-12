@extends('layouts.survey')

@section('title', 'Work/Housing Timeline')

@section('content')

<p>Show Timeline with Orientation answers, Family events, Education events, Work/Housing events</p>

<h1>Work/Housing Timeline</h1>

<div class="alert alert-primary border border-primary">
  @each('partials.timeline-event', $timelineEvents, 'timelineEvent')
</div>


@component('survey.timeline.event-timeline')
  @slot('category')
    Work/Housing Timeline
  @endslot

  @each('partials.timeline-event-category', $eventCategories, 'category')


@endcomponent

<a href="{{ route('survey.work-housing-followup') }}" class="btn btn-primary">Continue to Work/Housing followup questions &rarr;</a>

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '45'])
@endsection
