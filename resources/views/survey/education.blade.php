@extends('layouts.survey')

@section('title', 'Education')

@section('content')

<h2 class="text-center text-white bg-secondary">EDUCATION</h2>

<form method="post" action="{{ route('survey.education') }}">

    {{ csrf_field() }}

    <h3>Over the course of your life, did you? <em>(check all that apply)</em></h3>
    <div class="form-group">
    @foreach($lifeEvents as $lifeEvent)
        @include('partials.life-event')
    @endforeach
    </div>
{{--
    <div class="form-group">
        <label class="form-label" for="other_education_events">
            Other difficult or exciting education events not mentioned above?
        </label>
        <textarea class="form-control" id="other_education_events" name="other_education_events" rows="3"></textarea>
   </div>
--}}
   <div class="row justify-content-center">
        <button class="btn btn-primary">Save and Continue &rarr;</button>
    </div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '33'])
@endsection
