@extends('layouts.survey')

@section('title', 'Work/Housing')

@section('content')
<h2>Work/Housing</h2>

<form method="post" action="{{ route('survey.work-housing') }}">
    {{ csrf_field() }}
    <h3>Over the course of your life, did you? <em>(check all that apply)</em></h3>

    <div class="form-group">
        <div class="alert alert-primary lead">
            For the purposes of this section “job” and “work” is defined as ways to obtain money outside of the sex trade or other illegal enterprise.
        </div>

		<!-- Display Work/Housing life event checklist -->
		@each('partials.life-event', $lifeEvents, 'lifeEvent')

	</div>

	<!--
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
                Been employed part-time or full-time
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
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Trouble finding housing" />
                Had trouble finding housing
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Made above minimum wage" />
                Made above minimum wage
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Received public assistance" />
                Received public assistance (food stamps, disability, welfare, etc.)
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Experienced poverty as adult" />
                Experienced poverty as an adult
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Bought a house" />
                Bought a house
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Evicted" />
                Ever been evicted
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Lived with significant other for financial reasons" />
                Lived with a significant other for financial reasons
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Lived with family member for financial reasons" />
                Lived with a family member for financial reasons
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="work_housing_events[]" value="Financially supported by significant other" />
                Been financially supported by a significant other
            </label>
        </div>
	-->
    <fieldset class="ml-5">
      <div class="form-group row">
          <label>Was this person ever a trafficker?</label>

          <div class="form-check form-check-inline text-success">
              <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="supported_by_trafficker" id="radioYes" value="Yes" />Yes
              </label>
          </div>
          <div class="form-check form-check-inline text-danger">
              <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="supported_by_trafficker" id="radioNo" value="No" />No
              </label>
          </div>
          <div class="form-check form-check-inline text-info">
              <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="supported_by_trafficker" id="radioDontKnow" value="I don't know" />I don't know
              </label>
          </div>
      </div>
    </fieldset>

    <div class="form-group">
        <label class="form-label" for="other_work_events">
            Other difficult or exciting work events not mentioned above?
        </label>
        <textarea class="form-control" name="other_work_events" id="other_work_events" rows="3"></textarea>
    </div>

    <button class="btn btn-primary">Save and Continue &rarr;</button>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '28'])
@endsection
