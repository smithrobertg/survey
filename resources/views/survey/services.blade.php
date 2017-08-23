@extends('layouts.survey')

@section('title', 'Services')

@section('content')

    <h2>CHECKLIST OF SERVICES EVENTS</h2>


    While being exploited or as a result of your exploitation, have you ever sought services for:

    <form method="post" action="/services">

        {{ csrf_field() }}

        <div class="form-group">
            <label>Have you ever had a social service agency reach out to you to help?</label>

            <div class="form-check has-success">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="social_service_agency_reached_out" id="radioYes"
                           value="Yes"> Yes
                </label>
            </div>
            <div class="form-check has-danger">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="social_service_agency_reached_out" id="radioNo"
                           value="No"> No
                </label>
            </div>
        </div>

        <div class="form-group">
            <label>Did you receive those services?</label>
            <div class="form-check has-success">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="social_service_received" id="radioYes"
                           value="Yes"> Yes
                </label>
            </div>
            <div class="form-check has-danger">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="social_service_received" id="radioNo"
                           value="No"/> No
                </label>
            </div>
        </div>

        <fieldset class="form-group">
            <legend><strong>While being exploited or as a result of your exploitation, have you ever sought services
                    for:</strong><em> (check all that apply)</em></legend>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_substance_abuse"
                                   id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_substance_abuse"
                                   id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_mental_health"
                                   id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_mental_health"
                                   id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_health_care_clinic"
                                   id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_health_care_clinic"
                                   id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_emergency_room"
                                   id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_emergency_room"
                                   id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_domestic_violence"
                                   id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_domestic_violence"
                                   id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_sexual_assault"
                                   id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_sexual_assault"
                                   id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_legal" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_legal" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_employment"
                                   id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_employment"
                                   id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_family" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_family" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_religious"
                                   id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_religious" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
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
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_housing" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="received_services_housing" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="form-label" for="other_services">
                    Other services not mentioned above?
                </label>
                <textarea class="form-control" name="other_services" id="other_services" rows="3"></textarea>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Save & Continue &rarr;</button>

    </form>

@endsection