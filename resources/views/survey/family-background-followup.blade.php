@extends('layouts.survey')

@section('title', 'Family Followup Questions')

@section('content')
<h1>ADDITIONAL FAMILY QUESTIONS</h1>

<form method="post" action="/family-background-followup">

    {{ csrf_field() }}

    <h2>Who, if anyone, did you turn to for support growing up?</h2>
    <h3 class="font-italic">(Check all that apply)</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Mother">
                Mother
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Father">
                Father
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Step-parent">
                Step-parent
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Sibling">
                Sibling
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Other family member">
                Other family member
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Friends">
                Friends
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Teacher">
                Teacher
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Social Worker">
                Social Worker
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Foster/adoptive parent">
                Foster parent or adoptive parent
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="turned_to_for_support[]" value="Other">
                Other
            </label>
        </div>
        <div class="form-group row">
            <label for="turned-to-for-support-other" class="col-form-label">Other person turned to for support:</label>
            <input class="form-control" type="text" name="turned_to_for_support_other" id="turned-to-for-support-other" placeholder="Other person for support" />
        </div>
    </div>

    <h3>If lived in foster care (from initial checklist):</h3>
    <div>
        <fieldset class="form-group">
            <legend class="col-form-legend">How many places did you live while in foster care?</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="foster_care_places_lived" id="gridRadios1" value="1-2">
                    1-2
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="foster_care_places_lived" id="gridRadios2" value="3-4">
                    3-4
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="foster_care_places_lived" id="gridRadios3" value="5-6">
                    5-6
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="foster_care_places_lived" id="gridRadios3" value="7+">
                    7 or more
                </label>
            </div>
        </fieldset>

        <div class="form-group row">
            <label>Did you experience any <strong>positive</strong> placements?</label>
            <div class="form-check form-check-inline has-success">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="positive_foster_placements" id="fosterPositivePlacementsYes" value="Yes"> Yes
                </label>
            </div>
            <div class="form-check form-check-inline has-danger">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="positive_foster_placements" id="fosterPositivePlacementsNo" value="No"> No
                </label>
            </div>
        </div>

        <fieldset class="form-group">
            <legend class="col-form-legend">If yes, how many placements were positive?</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="how_many_positive_foster_placements" id="positivePlacements1-2" value="1-2">
                    1-2
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="how_many_positive_foster_placements" id="positivePlacements3-4" value="3-4">
                    3-4
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="how_many_positive_foster_placements" id="positivePlacements4-5" value="5-6">
                    5-6
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="how_many_positive_foster_placements" id="positivePlacements7+" value="7+">
                    7 or more
                </label>
            </div>
        </fieldset>

        <div class="form-group">
            <label for="positiveFosterPlacementDescription">What made the experiences positive? (open-ended)</label>
            <textarea class="form-control" name="positive_foster_placements_description" id="positiveFosterPlacementDescription" rows="3"></textarea>
        </div>

        <div class="form-group row">
            <label>Did you experience any <strong>negative</strong> placements?</label>
            <div class="form-check form-check-inline has-success">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="negative_foster_placements" id="fosterNegativePlacementsYes" value="Yes"> Yes
                </label>
            </div>
            <div class="form-check form-check-inline has-danger">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="negative_foster_placements" id="fosterNegativePlacementsNo" value="No"> No
                </label>
            </div>
        </div>

        <fieldset class="form-group">
            <legend class="col-form-legend">If yes, how many placements were negative?</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="how_many_negative_foster_placements" id="negativePlacements1-2" value="1-2">
                    1-2
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="how_many_negative_foster_placements" id="negativePlacements3-4" value="3-4">
                    3-4
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="how_many_negative_foster_placements" id="negativePlacements4-5" value="5-6">
                    5-6
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="how_many_negative_foster_placements" id="negativePlacements7+" value="7+">
                    7 or more
                </label>
            </div>
        </fieldset>

        <div class="form-group">
            <label for="negativeFosterPlacementDescription">What made the experiences negative? (open-ended)</label>
            <textarea class="form-control" name="negative_foster_placements_description"  id="negativeFosterPlacementDescription" rows="3"></textarea>
        </div>

        <fieldset class="form-group">
            <legend class="col-form-legend">What was your reason for leaving foster care?</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="reason_left_foster_care" id="gridRadios1" value="Returned to parent/guardian">
                    Returned to parent/guardian
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="reason_left_foster_care" id="gridRadios2" value="Adoption">
                    Adoption
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="reason_left_foster_care" id="gridRadios3" value="Ran away">
                    Ran away and did not return
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="reason_left_foster_care" id="gridRadios3" value="Aged out">
                    Aged out
                </label>
            </div>
            <div class="form-check ">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="reason_left_foster_care" id="gridRadios3" value="Other">
                    Other
                </label>
            </div>
            <div class="form-group row">
                <label for="reason-left-foster-care-other" class="col-form-label">Other reason left foster care:</label>
                <input class="form-control" type="text" name="reason_left_foster_care_other" id="reason-left-foster-care-other" placeholder="Other reason" />
            </div>
            <div class="form-group">
                <label class="form-label">If <em>"Aged out"</em> selected above...</label>
                <div class="form-group row">
                    <label>Did you have the option to sign yourself back in to receive additional benefits when you turned 18?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="option_to_sign_back_in_when_18" id="optionToSignBackInWhen18Yes" value="Yes"> Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="option_to_sign_back_in_when_18" id="optionToSignBackInWhen18No" value="No"> No
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label>If yes, did you?</label>
                    <div class="form-check form-check-inline has-success">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="signed_back_in_when_18" id="signedBackInWhen18Yes" value="Yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline has-danger">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="signed_back_in_when_18" id="signedBackInWhen18No" value="No">
                            No
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="signBackInDecisionFactors">What factors contributed to this decision? (open-ended)</label>
                    <textarea class="form-control" name="sign_back_in_decision_factors" id="signBackInDecisionFactors" rows="3"></textarea>
                </div>
            </div>
        </fieldset>

        <div class="form-group">
            <label for="roleLeavingFosterCareHad">What role, if any, did turning 18 or leaving foster care have for your life at the time? (open-ended)</label>
            <textarea class="form-control" name="role_leaving_foster_care_had" id="roleLeavingFosterCareHad" rows="3"></textarea>
        </div>
    </div> <!-- Foster care questions-->

    <button class="btn btn-primary">Save and Continue &rarr;</button>

</form>

@endsection
