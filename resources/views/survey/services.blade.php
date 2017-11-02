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
            <legend class="h4">While being exploited or as a result of your exploitation, have you ever <u>sought</u> services
                    for:<br /><em>(check all that apply)</em></legend>
            <hr />
            <div class="container ml-2">
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Substance use"/>
                          Substance use
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_substance_abuse"
                                     id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_substance_abuse"
                                     id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Mental health"/>
                          Mental health
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_mental_health"
                                     id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_mental_health"
                                     id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Health care clinic"/>
                          Health care clinic
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_health_care_clinic"
                                     id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_health_care_clinic"
                                     id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
            <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Emergency room"/>
                          Emergency room
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_emergency_room"
                                     id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_emergency_room"
                                     id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Domestic violence"/>
                          Domestic violence services
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_domestic_violence"
                                     id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_domestic_violence"
                                     id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Sexual assault"/>
                          Sexual assault services
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_sexual_assault"
                                     id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_sexual_assault"
                                     id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Legal"/>
                          Legal services
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_legal" id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_legal" id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Employment"/>
                          Employment services
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_employment"
                                     id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_employment"
                                     id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Family"/>
                          Family services (child care, custody, etc.)
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_family" id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_family" id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
            <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Religious"/>
                          Religious-based services
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_religious"
                                     id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_religious" id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                  <div class="form-check form-check-inline col-sm-4">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="services_sought[]"
                                 value="Housing"/>
                          Housing services
                      </label>
                  </div>
                  <div class="col-sm-8">
                      <label>Did you receive those services?</label>
                      <div class="form-check form-check-inline text-success">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_housing" id="radioYes"
                                     value="Yes"> Yes
                          </label>
                      </div>
                      <div class="form-check form-check-inline text-danger">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="received_services_housing" id="radioNo"
                                     value="No"> No
                          </label>
                      </div>
                  </div>
              </div>
              <hr />
              <div class="form-group row">
                <div class="form-check col-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Agency to help exit sex trade"/>
                        Agency to help exit sex trade
                    </label>
                </div>
                <div class="col-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline text-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_agency_help_exit_sex_trade" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline text-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_agency_help_exit_sex_trade" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
              </div>
              <div class="ml-5">
              <p>If "Agency to exit sex trade" checked:</p>
              <div class="form-group">
                  <label for="agency_help_exit_sex_trade">What did they help you with?</label>
                  <div class="row">
                      <select class="form-control col-sm-3" name="agency_help_exit_sex_trade">
                          <option value="">---Select One---</option>
                          <option>Housing/Shelter</option>
                          <option>Legal</option>
                          <option>Mentoring</option>
                          <option>Other</option>
                      </select>
                      <label class="col-sm-1 text-right" for="agency_help_exit_sex_trade_other">Other</label>
                      <input class="form-control col-sm-8" name="agency_help_exit_sex_trade_other">
                  </div>
              </div>
              <div class="form-group row">
                  <label>Was this agency helpful in exiting the sex trade?</label>
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
            <hr />
            <div class="form-group row">
                <label class="form-label" for="other_services">
                    Other services not mentioned above?
                </label>
                <textarea class="form-control" name="other_services" id="other_services" rows="3"></textarea>
            </div>
          </div>
          </fieldset>


      <div class="row">
        <button type="submit" class="btn btn-primary mx-auto">Save & Continue &rarr;</button>
      </div>
    </form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '58'])
@endsection
