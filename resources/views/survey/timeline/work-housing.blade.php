@extends('layouts.survey')

@section('title', 'Work/Housing Timeline')

@section('content')

<h1>Work/Housing Timeline</h1>

@foreach ($eventCategories as $category)
  @include('partials.timeline-event-category')
@endforeach

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '45'])
@endsection
