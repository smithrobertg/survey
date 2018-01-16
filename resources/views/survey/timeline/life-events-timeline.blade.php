@extends('layouts.survey')

@section('title', $lifeEventCategory)

@section('content')

<h4 class="display-4">Life Events Timeline after <em>{{ $lifeEventCategory }}</em></h4>

@include('survey.timeline.orientation-timeline')

@foreach ($eventCategories as $category)
  @include('partials.timeline-event-category')
@endforeach

<div class="col-4 mx-auto">
  <a href="{{ $nextPage }}" class="btn btn-danger btn-lg">Continue to {{ $nextPageMessage }} &rarr;</a>
</div>

@endsection


@section('progress')
    @include('partials.progress-bar', ['progress' => '45'])
@endsection
