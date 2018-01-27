@extends('layouts.survey')

@section('title', 'Final Questions')

@section('content')
<h2 class="bg-secondary text-white text-center">FINAL QUESTIONS</h2>

<form method="post" action="/final-questions">
    {{ csrf_field() }}
{{--
    <fieldset>
        <legend>Open ended questions</legend>
        <div class="form-control">
            <label for="explain_becoming_legal_adult">Can you explain what it was like turning 18 and becoming a legal adult?</label>
            <textarea class="form-control" name="explain_becoming_legal_adult" id="explain_becoming_legal_adult" rows="5"></textarea>
        </div>
        <div class="form-control">
            <label for="want_society_to_know">What do you want society to know about selling/exchanging sex that you feel non-survivors don’t understand?</label>
            <textarea class="form-control" name="want_society_to_know" id="want_society_to_know" rows="5"></textarea>
        </div>
        <div class="form-control">
            <label for="want_research_staff_to_know_about_answers">Is there anything else you would like the research staff to know about any of your answers?</label>
            <textarea class="form-control" name="want_research_staff_to_know_about_answers" id="want_research_staff_to_know_about_answers" rows="5"></textarea>
        </div>
   </fieldset>
--}}
    <div class="alert alert-primary border border-primary mt-3">
        <div class="text-center mb-2">
            <h2 class="display-4">Open ended questions</h2>
        </div>
    
        <div class="alert alert-secondary border border-secondary">
            <div class="form-group">
                <label for="explain_becoming_legal_adult" class="mb-0">
                    <div class="h5 lead">Can you explain what it was like turning 18 and becoming a legal adult?</div>
                </label>
                <textarea class="form-control" name="explain_becoming_legal_adult" id="explain_becoming_legal_adult" rows="5"></textarea>
            </div>
        </div>

        <div class="alert alert-secondary border border-secondary">
            <div class="form-group">
                <label for="want_society_to_know" class="mb-0">
                    <div class="h5 lead">What do you want society to know about selling/exchanging sex that you feel non-survivors don’t understand?</div>
                </label>
                <textarea class="form-control" name="want_society_to_know" id="want_society_to_know" rows="5"></textarea>
            </div>
        </div>

        <div class="alert alert-secondary border border-secondary">
            <div class="form-group">
                <label for="want_research_staff_to_know_about_answers" class="mb-0">
                    <div class="h5 lead">Is there anything else you would like the research staff to know about any of your answers?</div>
                </label>
                <textarea class="form-control" name="want_research_staff_to_know_about_answers" id="want_research_staff_to_know_about_answers" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
       <button type="submit" class="btn btn-primary btn-lg">Save and Continue &rarr; <em>End of Survey</em></button>
    </div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '96'])
@endsection
