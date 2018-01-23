@extends('layouts.survey')

@section('title', 'Social Relationships')

@section('content')
<h2 class="bg-secondary text-white text-center">SOCIAL RELATIONSHIP EVENTS</h2>

<form method="post" action="{{ route('survey.social-relationships') }}">
    {{ csrf_field() }}
    <fieldset class="form-group">
        <legend><em>Have you…(check all that apply)</em></legend>

        <!-- Display Social Relationships life event checklist -->
        @each('partials.life-event', $lifeEvents, 'lifeEvent')

        <hr />
        <div class="form-group">
            <label class="form-label" for="other_social_relationship_events">
                <h5>Other major events with social relationships not mentioned above?</h5>
            </label>
            <textarea class="form-control" name="other_social_relationships_events" id="other_social_relationships_events" rows="3"></textarea>
        </div>
    </fieldset>

    <button class="btn btn-primary">Save and Continue &rarr;</button>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '51'])
@endsection
