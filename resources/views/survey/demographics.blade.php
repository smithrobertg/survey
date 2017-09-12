@extends('layouts.survey')

@section('title', 'Demographics')

@section('content')
<h2>Demographic Information</h2>

<form method="post" action="{{ route('survey.demographics') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label for="gender" class="control-label">1. Gender:</label>
                <select name="gender" class="form-control dropdown">
                    <option value="not-selected">--Select One--</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="transgender">Transgender</option>
                    <option value="nonbinarythirdgender">Non-binary/third gender</option>
                    <option value="selfdescribe">Prefer to self-descibe (enter desciption)</option>
                    <option value="prefernottosay">Prefer not to say</option>
                </select>
            </div>
            <div class="col-sm-6">
                <label for="gender_self_describe" class="control-label">Gender (if self-described):</label>
                <input type="text" name="gender_self_describe" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="current_state_of_residence" class="control-label">2. Current state of residence:</label>
        <select name="current_state_of_residence" class="form-control dropdown">
            <option value="not-selected">--Select One--</option>
            <option value="MA">Massachusetts</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label for="race_ethnicity" class="control-label">3. What is your racial or ethnic identification?</label>
                <select name="race_ethnicity" class="form-control drowdown">
                    <option value="not-selected">--Select One--</option>
                    <option>American Indian or other Native American</option>
                    <option>Asian, Asian-American, or Pacific Islander</option>
                    <option>Black or African-American</option>
                    <option>White (Non-Hispanic)</option>
                    <option>Mexican or Mexican-American</option>
                    <option>Puerto Rican</option>
                    <option>Other Hispanic or Latino</option>
                    <option>Multiracial</option>
                    <option>Other (please specify)</option>
                    <option>I prefer not to say</option>
                </select>
            </div>
            <div class="col-sm-6">
                <label for="race_other" class="control-label">Other: (racial/ethnic identification)</label>
                <input type="text" name="race_other" class="form-control">
            </div>
        </div>
    </div>
    <div form-group>
        <label class="control-label">4. Were you born in the Unites States?</label>
        <div class="form-control">
            <label class="radio=inline col-sm-offset-1"><input type="radio" name="bornInUnitedStates" value="yes" />Yes</label>
            <label class="radio=inline col-sm-offset-1"><input type="radio" name="bornInUnitedStates" value="no" />No</label>
        </div>
    </div>
    <div class="form-group col-sm-offset-1">
        <label class="control-label" for="bornWhere">If not, where?</label>
        <input type="text" class="form-control" name="bornWhere" />
        <label class="control-label" for="howLongInUS">How long have you lived in the Unites States?</label>
        <select class="form-control dropdown" name="howLongInUS">
            <option>--Select One--</option>
            <option>Less than 1 year</option>
            <option>1-3 years</option>
            <option>4+ years</option>
        </select>
        <label class="control-label">Were you brought to the U.S. by a trafficker?</label>
        <div class="form-control">
            <label class="radio=inline col-sm-offset-1"><input type="radio" name="broughtToUsByTrafficker" value="yes" />Yes</label>
            <label class="radio=inline col-sm-offset-1"><input type="radio" name="broughtToUsByTrafficker" value="no" />No</label>
        </div>
    </div>
    <div class="form-group">
        <label for="identifyAs" class="control-label">5. Do you identify as any of the following? (please check all that apply)</label>
        <div class="col-sm-offset-1">
            <div class="checkbox">
                <label><input type="checkbox" name="identifyAs[]" value="Survivor">Survivor of commercial sexual exploitation or sex trafficking.</label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="identifyAs[]" value="Controlled">Controlled by another person to sell sex as a payment for drugs or other need.
                </label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="identifyAs[]" value="Exchanged sex">Exchanged sex for money, drugs, food, shelter, or other needs.</label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="identifyAs[]" value="Someone paid another for sex in exchange">Someone has paid another person to have sex with you in exchange for
                    food, shelter, or other needs.
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="identifyAs[]" value="Had sex for money because bf/gf/spouse/family asked or forced">Had sex for money because a boyfriend, girlfriend, spouse, or family
                    member asked or forced you.
                </label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="identifyAs[]" value="Sex worker or made money selling sex">Being a sex worker or have you ever made money selling sex.</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="describe_becoming_legal_adult" class="control-label">Can you explain what it was like turning 18 and becoming a legal adult? (open-ended answer)</label>
        <textarea class="form-control" name="describe_becoming_legal_adult" rows="3"></textarea>
    </div>

    <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary">Save and Continue &rarr;</button>
    </div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '8'])
@endsection
