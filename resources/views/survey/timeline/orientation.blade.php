@extends('layouts.survey')

@section('title', 'Timeline - Orientation Questions')

@section('content')

	<h2>TBD when we have the grid program for Life Events Calendar timeline</h2>

	<div class="row justify-content-center">
		<a href="{{ route('survey.family-background') }}" class="btn btn-primary btn-lg col-4">Continue Survey (Family Background) &rarr;</a>
	</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '18'])
@endsection
