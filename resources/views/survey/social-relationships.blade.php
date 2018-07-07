@extends('layouts.survey')

@section('title', 'Social Relationships')

@section('content')
<h2 class="bg-secondary text-white text-center">SOCIAL RELATIONSHIP EVENTS</h2>

<form method="post" action="{{ route('survey.social-relationships') }}">
    {{ csrf_field() }}
    <fieldset class="form-group">
        <legend><em>Have you…(check all that apply)</em></legend>

        <!-- Married / number of times -->
        @include('partials.life-event', [ 'lifeEvent' => \App\LifeEvent::where('event', 'Married')->first() ])
        <div class="form-group row ml-5">
            <label class="mr-3">Married how many times?</label>
            <input type="text" name="times_married" id="times_married" placeholder="Number of times married"></input>
        </div>
        <hr />

        <!-- Display Social Relationships life events after 'Married' in checklist -->
        @each('partials.life-event', $lifeEvents->where('field_name', 'social_relationships_events[]')->where('field_id', 'Group1'), 'lifeEvent')

        <!-- Had children / number of children -->
        @include('partials.life-event', [ 'lifeEvent' => \App\LifeEvent::where('event', 'Had child')->first() ])
        <div class="form-group row ml-5">
            <label class="mr-3">How many children have you had?</label>
            <input type="text" name="number_of_children" id="number_of_children" placeholder="Number of children"></input>
        </div>
        <hr />

        <!-- Display Social Relationships life events after 'Had Child' in checklist -->
        @each('partials.life-event', $lifeEvents->where('field_name', 'social_relationships_events[]')->where('field_id', 'Group2'), 'lifeEvent')

    </fieldset>

   <div class="row justify-content-center">
        <button class="btn btn-primary">Save and Continue &rarr;</button>
    </div>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '51'])
@endsection
