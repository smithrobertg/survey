@extends('layouts.survey')

@section('title', 'Education')

@section('content')

<h2>EDUCATION</h2>

<form method="post" action="/education">

    {{ csrf_field() }}

    <div class="form-group">
        <h3>Over the course of your life, did you? <em>(check all that apply)</em></h3>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Attended Pre-K">
                Attend Pre-K
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Got award">
                Get an award at school
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Honor roll">
                Ever make the honor roll or high honor roll (got all A's and B's, or all A's)
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Source of success/fulfillment">
                Ever see school as a source of success and fulfillment
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Source of failure/disappointment">
                Ever see school as a source of failure and disappointment
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Liked teacher">
                Have a teacher you liked and connected to
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Had difficult teacher">
                Have a teacher that made things difficult for you
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Repeated grade">
                Have to repeat a grade
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Graduated high school">
                Graduate from high school
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Got GED">
                Get a GED
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Felt always in trouble with teachers">
                Felt like you were always getting into trouble with teachers/administrators
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Felt treated unfairly">
                Felt like you were treated unfairly in school
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Felt school was a struggle/always falling behind">
                Feel like school was a struggle, always falling behind
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Skip school regularly">
                Skip school regularly at any period of time
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Left school for a period of time">
                Ever leave school for a period of time
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Abused by teacher/someone else">
                Experienced abuse by a teacher (or someone else at school)
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Applied to college">
                Apply to college
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Went to college">
                Go to college
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="education_events[]" value="Accepted to college but did not attend">
                Get into a college, but did not attend
            </label>
        </div>
  </div>

    <div class="form-group">
        <label class="form-label" for="other_education_events">
            Other difficult or exciting education events not mentioned above?
        </label>
        <textarea class="form-control" id="other_education_events" name="other_education_events" rows="3"></textarea>
   </div>

    <button class="btn btn-primary">Continue &rarr;</button>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '22'])
@endsection
