@extends('layouts.survey')

@section('title', 'Social Relationships - Timeline')

@section('content')

<p>SHOW SOCIAL RELATIONSHIP EVENTS POPULATED IN TIMELINE</p>

<a href="/criminal-justice" class="btn btn-primary btn-lg">Continue to Criminal Jusice System &rarr;</a>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '40'])
@endsection
