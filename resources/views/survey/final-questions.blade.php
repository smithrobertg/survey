@extends('layouts.survey')

@section('title', 'Final Questions')

@section('content')
<form method="post" action="/final-questions">
    {{ csrf_field() }}
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
   
   <button type="submit" class="btn btn-primary">Save and Continue &rarr;</button>

</form>
@endsection
