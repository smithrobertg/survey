@extends('layouts.survey')

@section('title', 'Family Background')

@section('content')

<h2>Family Background</h2>

<h3>While you were growing up, during your first <strong>18 years of life</strong>…<em>(check all that apply)</em></h3>

<form>
    <div class="form-group row">
        <label>Did a parent, guardian, or caregiver get married?</label>

        <div class="form-check form-check-inline has-success">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="parent_got_married" id="radioYes" value="Yes"> Yes
            </label>
        </div>
        <div class="form-check form-check-inline has-danger">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="parent_got_married" id="radioNo" value="No"> No
            </label>
        </div>
    </div>

    // check list option group
    <h3>Did a parent or other adult in the household <strong>often</strong>:</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="parent_or_adult_often[]" value="Swear at/insult/putdown/humiliate">
                Swear at you, insult you, put you down, or humiliate you?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="parent_or_adult_often[]" value="Affraid physically hurt">
                Act in a way that made you afraid that you might be physically hurt?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="parent_or_adult_often[]" value="Push/slap/grab/throw something">
                Push, grab, slap, or throw something at you?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="parent_or_adult_often[]" value="Swear/insult/putdown/humiliate">
                <strong>Ever</strong> hit you so hard that you had marks or were injured?
            </label>
        </div>
    </div>

    <h3>Did an adult or person at least 5 years older that you ever <strong>ever</strong>:</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="adult_or_person_5_years_older_ever[]" value="Touch/fondle/have touch in sexaul way">
                Touch or fondle you or have you touch their body in a sexual way?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="adult_or_person_5_years_older_ever[]" value="Try or actually have sex">
                Try to or actually have oral, anal, or vaginal sex with you?
            </label>
        </div>
    </div>

    <h3>Did you <strong>often</strong> feel that:</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="often_feel_that[]" value="No one love you">
                No one in your family loved you or thought you were important or special?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="often_feel_that[]" value="Family not close or not support each other">
                Your family didn’t look out for each other, feel close to each other, or support each other?
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="often_feel_that[]" value="Not enough to eat/dirty clothes/no one to protect you">
                You didn’t have enough to eat, had to wear dirty clothes, and had no one to protect you?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="often_feel_that[]" value="Parents too drunk or high to take care of you">
                Your parents were too drunk or high to take care of you or take you to the doctor if you needed it?
            </label>
        </div>
    </div>

    <div class="form-group row">
        <label>Your parents were <strong>ever</strong> separated or divorced?</label>

        <div class="form-check form-check-inline has-success">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="parent_separated_divorced" id="radioYes" value="Yes"> Yes
            </label>
        </div>
        <div class="form-check form-check-inline has-danger">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="parent_separated_divorced" id="radioNo" value="No"> No
            </label>
        </div>
    </div>

    <h3>Was your mother or stepmother:</h3>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="mother_or_stepmother[]" value="Often pushed/grabbed/slapped/something thrown at">
                <strong>Often</strong> pushed, grabbed, slapped, or had something thrown at her?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="mother_or_stepmother[]" value="Kicked/bitten/hit">
                <strong>Sometimes or often</strong> kicked, bitten, hit with a fist, or hit with something harder?
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="mother_or_stepmother[]" value="Repeatedly hit/threatened with gun or knife">
                <strong>Ever</strong> repeatedly hit over at least a few minutes or threatened with a gun or knife?
            </label>
        </div>
    </div>

    <div class="form-group row">
        <label>Did you live with anyone who was a problem drinker or alcoholic or who used street drugs?</label>

        <div class="form-check form-check-inline has-success">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="lived_with_alchoholic_or_drug_user" id="radioYes" value="Yes"> Yes
            </label>
        </div>
        <div class="form-check form-check-inline has-danger">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="lived_with_alchoholic_or_drug_user" id="radioNo" value="No"> No
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Save and Continue &rarr;</button>
</form>

 	A household member was depressed or mentally ill or did a household member attempt suicide
 	A household member went to prison
 	Someone else came to live with you (bf or gf of parent, aunt, uncle, etc.)
 	You moved around a lot
 	You experienced homelessness
 	You ran away
 	Your family received public assistance (food stamps, disability, unemployment, etc.)
 	Your family could not afford heat or water (or other basic utilities)
 	Your family experienced poverty
 	You used drugs or alcohol
 	You were addicted to drugs or alcohol
 	You felt like your life was threatened
 	Lived in foster care*
 	Other exciting or difficult family events that stood out to you? List here: _________
——If bolded questions are checked, will be asked to place in timeline——
*note for foster care, also ask age foster care ended

@endsection

<!--
    Did a parent, guardian, or caregiver get married
Did a parent or other adult in the household often:
    Swear at you, insult you, put you down, or humiliate you?
    Act in a way that made you afraid that you might be physically hurt?
    Push, grab, slap, or throw something at you?
    Ever hit you so hard that you had marks or were injured?
Did an adult or person at least 5 years older than you ever:
    Touch or fondle you or have you touch their body in a sexual way?
    Try to or actually have oral, anal, or vaginal sex with you?
Did you often feel that:
    No one in your family loved you or thought you were important or special?
    Your family didn’t look out for each other, feel close to each other, or support each other?
    You didn’t have enough to eat, had to wear dirty clothes, and had no one to protect you?
    Your parents were too drunk or high to take care of you or take you to the doctor if you needed it?
    Your parents were ever separated or divorced?
Was your mother or stepmother:
    Often pushed, grabbed, slapped, or had something thrown at her?
    Sometimes or often kicked, bitten, hit with a fist, or hit with something harder?
    Ever repeatedly hit over at least a few minutes or threatened with a gun or knife?
    Did you live with anyone who was a problem drinker or alcoholic or who used street drugs?
    A household member was depressed or mentally ill or did a household member attempt suicide
    A household member went to prison
    Someone else came to live with you (bf or gf of parent, aunt, uncle, etc.)
    You moved around a lot
    You experienced homelessness
    You ran away
    Your family received public assistance (food stamps, disability, unemployment, etc.)
    Your family could not afford heat or water (or other basic utilities)
    Your family experienced poverty
    You used drugs or alcohol
    You were addicted to drugs or alcohol
    You felt like your life was threatened
    Lived in foster care*
    Other exciting or difficult family events that stood out to you? List here: _________
——If bolded questions are checked, will be asked to place in timeline——
*note for foster care, also ask age foster care ended
-->
