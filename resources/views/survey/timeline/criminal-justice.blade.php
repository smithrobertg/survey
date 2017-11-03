@extends('layouts.survey')

@section('title', 'Criminal Justice System - Timeline')

@section('content')

<p>SHOW CRIMINAL JUSTICE EVENTS POPULATED IN TIMELINE</p>

    <a href="/criminal-justice-followup" class="btn btn-primary btn-lg">Continue to Criminal Justice Followup Questions &rarr;</a>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '66'])
@endsection
