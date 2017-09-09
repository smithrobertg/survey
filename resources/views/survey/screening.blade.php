@extends('layouts.survey')

@section('title', 'Screening')

@section('content')
<h1 class="text-center">Screening Questions</h1>

<form class="form-horizontal">
    <div class="row">
        <h3 class="col-sm-12">
            Are you 18 years old or older?&nbsp;&nbsp;&nbsp;
            <label class="radio-inline text-success"><input type="radio" name="AgeScreening" id="age_18Yes" value="Yes" /> Yes</label>
            <label class="radio-inline text-danger"><input type="radio" name="AgeScreening" id="age_18No" value="No" /> No</label>
        </h3>
    </div>
    <div class="row">
        <h3 class="col-sm-12">
            Do you identify with any of the following (as an adult, teen, or child)?&nbsp;&nbsp;&nbsp;
            <label class="radio-inline text-success"><input type="radio" name="IdentifyAs" id="IdentifyYes" value="Yes" /> Yes</label>
            <label class="radio-inline text-danger"><input type="radio" name="IdentifyAs" id="IdentifyNo" value="No" /> No</label>
        </h3>
        <ul class="lead ml-3">
            <li>Survivor of commercial sexual expoitation or sex trafficking</li>
            <li>Ever been controlled by another person to sell sex as a payment for drugs or other need</li>
            <li>Exchanged sex for money, drugs, food, shelter, or other needs</li>
            <li>Someone has paid another person to have sex with you in exchange for food, shelter, or other needs</li>
            <li>Had sex for money because a boyfriend, girlfriend, spouse, or family member asked or forced you</li>
            <li>Being a sex worker or have you ever made money selling sex</li>
        </ul>
    </div>
    <div class="text-center">
        <a href="/consent" class="btn btn-success btn-lg">Continue</a>
    </div>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '2'])
@endsection
