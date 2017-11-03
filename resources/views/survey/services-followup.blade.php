@extends('layouts.survey')

@section('title', 'PageTitle')

@section('content')
    <h2>ADDITIONAL SERVICES QUESTIONS</h2>
    <form method="post" action="/services-followup">
        {{ csrf_field() }}
        <fieldset class="form-group">
            <legend>Have you ever experienced <strong><em>trouble getting services</em></strong> you need for (or faced discrimination in these
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
        </fieldset>

        <div class="form-group">
            <label class="form-label" for="explain_services_experiences">
                If you would like to explain any of these experiences, please include explanation here:</label>
            <textarea class="form-control" name="explain_services_experiences" id="explain_services_experiences"
                      rows="3"></textarea>
        </div>

        <button class="btn btn-primary">Save and Continue &rarr;</button>

    </form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '93'])
@endsection
