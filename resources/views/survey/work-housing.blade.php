@extends('layouts.survey')

@section('title', 'Work/Housing')

@section('content')
<h2 class="bg-secondary text-white text-center">WORK/HOUSING</h2>

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

    <fieldset class="ml-5">
      <div class="form-group row">
          <label>Was this person ever a trafficker? &nbsp;</label>

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
{{--
    <div class="form-group">
        <label class="form-label" for="other_work_events">
            Other difficult or exciting work events not mentioned above?
        </label>
        <textarea class="form-control" name="other_work_events" id="other_work_events" rows="3"></textarea>
    </div>
--}}
   <div class="row justify-content-center">
        <button class="btn btn-primary">Save and Continue &rarr;</button>
    </div>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '39'])
@endsection
