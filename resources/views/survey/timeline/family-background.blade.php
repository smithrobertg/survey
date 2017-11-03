@extends('layouts.survey')

@section('title', 'Family Background Followup')

@section('content')
<h1>Family Background Timeline</h1>
<p>Display Timeline with Orienation answers, Family Events.</p>

    <h2><a href="{{ route('survey.family-background-followup') }}" class="btn btn-primary btn-lg">Continue to Family Background Followup Questions &rarr;</a></h2>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '27'])
@endsection
