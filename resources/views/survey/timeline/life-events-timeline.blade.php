@extends('layouts.survey')

@section('title', $lifeEventCategory)

@section('content')

<h4 class="h3 bg-secondary text-white text-center">Life Events Timeline after <em>{{ $lifeEventCategory }}</em></h4>

@include('survey.timeline.orientation-timeline', [ 'orientation' => \App\Orientation::where('survey_id', session('survey_id'))->first() ])

@foreach ($eventCategories as $category)
  @include('partials.timeline-event-category')
@endforeach

<div class="row justify-content-center">
  <a href="{{ $nextPage }}" class="btn btn-danger btn-lg">Continue to {{ $nextPageMessage }} &rarr;</a>
</div>

@endsection


@section('progress')
    @include('partials.progress-bar', ['progress' => '45'])
@endsection
