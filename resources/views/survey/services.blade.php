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
                    <input class="form-check-input" type="radio" name="received_service" id="radioYes" value="Yes"> Yes
                </label>
            </div>
            <div class="form-check has-danger">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="received_service" id="radioNo" value="No"> No
                </label>
            </div>
        </div>

        <fieldset class="form-group">
            <legend><strong>While being exploited or as a result of your exploitation, have you ever sought services
                    for:</strong><em> (check all that apply)</em></legend>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]" value="Arrested"/>
                        Substance use
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Detained but not charged"/>
                        Mental health
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Convicted/found guilty"/>
                        Health care clinic
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]" value="Incarcerated"/>
                        Emergency room
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Negative interaction w/police"/>
                        Domestic violence services
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Positive interaction w/police"/>
                        Sexual assault services
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Solicited sexually by police officer"/>
                        Legal services
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Criminal record"/>
                        Employment services
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Criminal record"/>
                        Family services (child care, custody, etc.)
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Criminal record"/>
                        Religious-based services
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
                                   value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-check form-check-inline col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="services_sought[]"
                               value="Criminal record"/>
                        Housing services
                    </label>
                </div>
                <div class="col-sm-8">
                    <label>Did you receive those services?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioYes"
                                   value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="services_received[]" id="radioNo"
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