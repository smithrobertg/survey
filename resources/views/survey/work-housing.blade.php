@extends('layouts.survey')

@section('title', 'Work/Housing')

@section('content')
<h2>Work/Housing</h2>

<form method="post" action="/work-housing">
    {{ csrf_field() }}
    <h2>CHECKLIST OF WORK EVENTS</h2>

    <div class="form-group">
        <h3>
            For the purposes of this section “job” and “work” is defined as ways to obtain money outside of the sex trade or other illegal enterprise.

            <em>(check all that apply)</em>
        </h3>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Applied for PT/FT job" />
                Applied for a part-time or full-time job?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Had trouble finding job" />
                Had trouble finding a job
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Been employed PT/FT" />
                Been employed part-time or full-time*
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Been fired" />
                Been fired from a job
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Quit job" />
                Quit a job
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Live on own/supporting self+others" />
                Lived on your own, supporting yourself and/or others
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Had trouble paying bills" />
                Had trouble paying regular bills (utilities, phone, car, rent, etc.)
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Missed/late rent" />
                Missed or late rent payment
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Trouble paying medical bills" />
                Experienced trouble paying medical bills
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Got GED" />
                Get a GED
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Apply to college" />
                Apply to college
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Accepted to college but did not attend" />
                Get into a college, but did not attend
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Felt always in trouble with teachers" />
                Felt like you were always getting into trouble with teachers/administrators
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Felt treated unfairly" />
                Felt like you were treated unfairly in school
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Feel school was a struggle/always falling behind" />
                Feel like school was a struggle, always falling behind
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Skip school regularly" />
                Skip school regularly at any period of time
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Left school for a period of time" />
                Ever leave school for a period of time
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Abused by teacher/someone else" />
                Experienced abuse by a teacher (or someone else at school)
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
 	
 	Made above minimum wage
 	Received public assistance (food stamps, disability, welfare, etc.)
 	Experienced poverty as an adult
 	Bought a house
 	Ever been evicted
 	Lived with a significant other for financial reasons 
 	Lived with a family member for financial reasons
 	Been financially supported by a significant other
 	Was this person ever a trafficker? (yes/no)
 	Other difficult or exciting work events not mentioned above? _________

——If bolded questions are checked, will be asked to place in timeline——
*for working PT/FT put in timeline ranges of time employed 40+ hours/week

@endsection