@extends('layouts.survey')

@section('title', 'Services - Timeline')

@section('content')

<p>SHOW SERVICES POPULATED IN TIMELINE</p>

    <a href="/services-followup" class="btn btn-primary">Continue to Final Questions &rarr;</a>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '62'])
@endsection
