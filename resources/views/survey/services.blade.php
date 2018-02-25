@extends('layouts.survey')

@section('title', 'Services')

@section('content')

    <h2 class="bg-secondary text-white text-center">SERVICES EVENTS</h2>

    <form method="post" action="{{ route('survey.services')}}">
        {{ csrf_field() }}

      <div class="container ml-2">
        <div class="form-row h5">
            <label class="mr-3">Have you ever had a social service agency reach out to you to help?</label>
              <div class="form-check form-check-inline text-success">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="social_service_agency_reached_out" id="radioYes"
                             value="Yes"> Yes
                  </label>
              </div>
              <div class="form-check form-check-inline text-danger">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="social_service_agency_reached_out" id="radioNo"
                             value="No"> No
                  </label>
              </div>
          </div>

          <div class="form-row h5">
            <label class="mr-3">Did you receive those services?</label>
            <div class="form-check form-check-inline text-success">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="social_service_received" id="radioYes"
                           value="Yes"> Yes
                </label>
            </div>
            <div class="form-check form-check-inline text-danger">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="social_service_received" id="radioNo"
                           value="No"> No
                </label>
            </div>
          </div>
        </div>

        <hr />

        <fieldset class="form-group">
            <legend class="h5">While being exploited or as a result of your exploitation, have you ever <u>sought</u> services
                    for:<br /><em>(check all that apply)</em></legend>

            @each ('partials.life-event-services', $lifeEvents, 'lifeEvent')
        </fieldset>

        <div class="alert alert-secondary border border-secondary ml-5">
            <p>If "Agency to exit sex trade" checked:</p>
            <div class="form-group">
                <label for="agency_help_exit_sex_trade">What did they help you with?</label>
                <div class="form-group row">
                    <select class="form-control col-3 ml-3" name="agency_help_exit_sex_trade" id="agency_help_exit_sex_trade">
                        <option value="">---Select One---</option>
                        <option>Housing/Shelter</option>
                        <option>Legal</option>
                        <option>Mentoring</option>
                        <option>Other</option>
                    </select>
                    <label class="col-1 text-right" for="agency_help_exit_sex_trade_other">Other</label>
                    <input class="form-control col-4" name="agency_help_exit_sex_trade_other" placeholder="Other">
                </div>
            </div>
            <div class="form-group">
                <label>Was this agency helpful in exiting the sex trade?</label>
                &nbsp;
                <div class="form-check form-check-inline text-success">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="agency_helpful_exiting_sex_trade" id="radioYes"
                                value="Yes"> Yes
                    </label>
                </div>
                <div class="form-check form-check-inline text-danger">
                    <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="agency_helpful_exiting_sex_trade" id="radioNo"
                            value="No"> No
                    </label>
                </div>
            </div>
        </div>
{{--        
        <hr />
        <div class="form-group row">
            <label class="form-label" for="other_services">
                <h5>Other services not mentioned above?</h5>
            </label>
            <textarea class="form-control" name="other_services" id="other_services" rows="3"></textarea>
        </div>
--}}
      <div class="row">
        <button type="submit" class="btn btn-primary mx-auto">Save &amp; Continue &rarr;</button>
      </div>
    </form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '84'])
@endsection
