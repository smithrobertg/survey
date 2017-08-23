@extends('layouts.survey')

@section('title', 'PageTitle')

@section('content')
    <h2>ADDITIONAL SERVICES QUESTIONS</h2>
    <form method="post" action="/services-followup">
        {{ csrf_field() }}
        <fieldset class="form-group">
            <legend>Have you ever experienced trouble getting services you need for (or faced discrimination in these
                areas)…<em>(check all that apply)</em></legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Health care"/>
                    Health care
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Employment"/>
                    Employment
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Housing"/>
                    Housing
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="School"/>
                    School
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Police"/>
                    Police
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Legal aid"/>
                    Legal aid
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Courts"/>
                    Courts
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Family"/>
                    Family
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Religious"/>
                    Religious
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Domestic violence"/>
                    Domestic Violence
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Substance use"/>
                    Substance Use
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Mental health"/>
                    Mental Health
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Sexual assault"/>
                    Sexual Assault
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="services_followup_events[]"
                           value="Agency to help exit sex trade"/>
                    Agency to help exit sex trade
                </label>
            </div>
        </fieldset>

        <p>If "Agency to exit sex trade" checked:</p>
        <div class="form-group">
            <label for="agency_help_exit_sex_trade">What did they help you with?</label>
            <div class="row">
                <select class="form-control col-sm-3" name="agency_help_exit_sex_trade">
                    <option>---Select One---</option>
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
            <div class="form-check form-check-inline has-success">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="agency_helpful_exiting_sex_trade" id="radioYes"
                           value="Yes"> Yes
                </label>
            </div>
            <div class="form-check form-check-inline has-danger">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="agency_helpful_exiting_sex_trade" id="radioNo"
                           value="No"> No
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label" for="explain_services_experiences">
                If you would like to explain any of these experiences, please include explanation here:</label>
            <textarea class="form-control" name="explain_services_experiences" id="explain_services_experiences"
                      rows="3"></textarea>
        </div>

        <button class="btn btn-primary">Save and Continue &rarr;</button>

    </form>
@endsection