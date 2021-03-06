@extends('layouts.survey')

@section('title', 'Screening')

@section('content')
<h1 class="text-center">Screening Questions</h1>

<form method="post" action="{{ route('survey.screening') }}" class="form-horizontal">
    {{ csrf_field() }}
    <div class="row">
        <h3 class="col-sm-12">
            Are you 18 years old or older?&nbsp;&nbsp;&nbsp;
            <label class="radio-inline text-success"><input type="radio" name="age_18_or_older" id="age_18_yes" value="Yes" /> Yes</label>
            <label class="radio-inline text-danger"><input type="radio" name="age_18_or_older" id="age_18_no" value="No" /> No</label>
        </h3>
    </div>
    <div class="row">
        <h3 class="col-sm-12">
            Do you identify with any of the following (as an adult, teen, or child)?&nbsp;&nbsp;&nbsp;
            <label class="radio-inline text-success"><input type="radio" name="identify_as_candidate" id="identify_yes" value="Yes" /> Yes</label>
            <label class="radio-inline text-danger"><input type="radio" name="identify_as_candidate" id="identify_no" value="No" /> No</label>
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
        <button type="submit" class="btn btn-success btn-lg">Continue</button>
    </div>

</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '3'])
@endsection
