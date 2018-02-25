@extends('layouts.survey')

@section('title', 'Family Background')

@section('content')
<h2 class="bg-secondary text-white text-center">FAMILY BACKGROUND</h2>

<form method="post" action="{{ route('survey.family-background') }}">

    {{ csrf_field() }}

    <div class="alert alert-primary">
      <div class="h4">While you were growing up, during your first <strong>18 years of life</strong>:<em> (check all that apply)</em></div>
    </div>

    <div class="container ml-3">
      <h4>Did a parent or other adult in the household <strong>often</strong>:</h4>
      <div class="form-group">
          <div class="form-check">
              <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="parent_or_adult_often[]" value="Swear at/insult/putdown/humiliate">
                  Swear at you, insult you, put you down, or humiliate you?
              </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="parent_or_adult_often[]" value="Affraid physically hurt">
                  Act in a way that made you afraid that you might be physically hurt?
              </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="parent_or_adult_often[]" value="Push/slap/grab/throw something">
                  Push, grab, slap, or throw something at you?
              </label>
          </div>
          <div class="form-check">
              <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="parent_or_adult_often[]" value="Hit so hard marks or injured">
                  <strong>Ever</strong> hit you so hard that you had marks or were injured?
              </label>
          </div>
      </div>

    <h4>Did an adult or person at least 5 years older than you <strong>ever</strong>:</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="adult_or_person_5_years_older_ever[]" value="Touch/fondle/have touch in sexaul way">
                Touch or fondle you or have you touch their body in a sexual way?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="adult_or_person_5_years_older_ever[]" value="Try or actually have sex">
                Try to or actually have oral, anal, or vaginal sex with you?
            </label>
        </div>
    </div>

    <h4>Did you <strong>often</strong> feel that:</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="often_feel_that[]" value="No one love you">
                No one in your family loved you or thought you were important or special?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="often_feel_that[]" value="Family not close or not support each other">
                Your family didn’t look out for each other, feel close to each other, or support each other?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="often_feel_that[]" value="Not enough to eat/dirty clothes/no one to protect you">
                You didn’t have enough to eat, had to wear dirty clothes, and had no one to protect you?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="often_feel_that[]" value="Parents too drunk or high to take care of you">
                Your parents were too drunk or high to take care of you or take you to the doctor if you needed it?
            </label>
        </div>
    </div>

    <h4>Was your mother or stepmother:</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="mother_or_stepmother[]" value="Often pushed/grabbed/slapped/something thrown at">
                <strong>Often</strong> pushed, grabbed, slapped, or had something thrown at her?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="mother_or_stepmother[]" value="Kicked/bitten/hit">
                <strong>Sometimes or often</strong> kicked, bitten, hit with a fist, or hit with something harder?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="mother_or_stepmother[]" value="Repeatedly hit/threatened with gun or knife">
                <strong>Ever</strong> repeatedly hit over at least a few minutes or threatened with a gun or knife?
            </label>
        </div>
    </div>

    <h4>Was your father or stepfather:</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="father_or_stepfather[]" value="Often pushed/grabbed/slapped/something thrown at">
                <strong>Often</strong> pushed, grabbed, slapped, or had something thrown at her?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="father_or_stepfather[]" value="Kicked/bitten/hit">
                <strong>Sometimes or often</strong> kicked, bitten, hit with a fist, or hit with something harder?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="father_or_stepfather[]" value="Repeatedly hit/threatened with gun or knife">
                <strong>Ever</strong> repeatedly hit over at least a few minutes or threatened with a gun or knife?
            </label>
        </div>
    </div>
  </div>

    <hr />

    <div class="alert alert-primary">
        <div class="h4">While you were growing up, during your first <strong>18 years of life</strong>:</div>
    </div>

    <div class="form-group ml-3">
        @foreach($lifeEvents->where('field_id', '!=', "DO NOT DISPLAY") as $lifeEvent)
            @include('partials.life-event')
        @endforeach
    </div>
{{--
    <div class="form-group">
        <label for="other_family_events" class="form-label h4">Other exciting or difficult family events that stood out to you?</label>
        <textarea class="form-control" name="other_family_events" rows="3"></textarea>
    </div>
--}}
    <div class="row justify-content-center mb-2">
        <button type="submit" class="btn btn-primary">Save and Continue &rarr;</button>
    </div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '21'])
@endsection
