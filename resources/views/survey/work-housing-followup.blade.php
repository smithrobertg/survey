@extends('layouts.survey')

@section('title', 'Work/Housing - Followup')

@section('content')
<h2>ADDITIONAL WORK/HOUSING QUESTIONS</h2>

<form method="post" action="/work-housing-followup">
    {{ csrf_field() }}
    <fieldset class="form-group">
        <legend>If applied for Part Time/Full Time work outside of the sex trade, was it:</legend>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="work_applied_for_outside_sex_trade" id="workAppliedForPT" value="PT" />
                Part Time
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="work_applied_for_outside_sex_trade" id="workAppliedForFT" value="FT" />
                Full Time
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="work_applied_for_outside_sex_trade" id="workAppliedForBoth" value="Both(PT+FT)" />
                Both (Full time & Part time)
            </label>
        </div>
    </fieldset>

    <div class="form-group">
        <label for="age_applied_for_first_job">What <strong>AGE</strong> were you when you applied for your first job?</label>
        <input class="form-control" type="text" name="age_applied_for_first_job" id="age_applied_for_first_job" placeholder="Age" />
    </div>

    <div class="form-group">
        <label for="age_applied_for_first_job_as_adult">If before 18, when did you apply for your first Part Time or Full Time job as an adult?</label>
        <input class="form-control" type="text" name="age_applied_for_first_job_as_adult" id="age_applied_for_first_job_as_adult" placeholder="Age" />
    </div>

    <button class="btn btn-primary" type="submit">Save and Continue &rarr;</button>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '48'])
@endsection
