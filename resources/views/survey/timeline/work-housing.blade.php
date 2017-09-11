@extends('layouts.survey')

@section('title', 'Work/Housing')

@section('content')

<p>Show Timeline with Orientation answers, Family events, Education events, Work/Housing events</p>

    <a href="/work-housing-followup" class="btn btn-primary">Continue to Work/Housing followup questions &rarr;</a>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '32'])
@endsection
