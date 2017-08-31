@extends('layouts.survey')

@section('title', 'Education Timeline')

<h2>EDUCATION TIMELINE</h2>
<p>
For any of these questions, checked, present option for AGE, YEAR, RANGE and (hopefully) automatically populate in timeline.
 	
 	
 	
 	
 	
 	
</p>

<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occured.  These events will be populated in timeline.</h3>
  <hr />
	    <form method="post" action="{{ route('survey.education-timeline') }}">
        {{ csrf_field() }}
        <fieldset>
            <legend>Have to repeat a grade</legend>
            <div class="form-row">
                <div class="input-group col-3">
                    <span class="input-group-addon">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="timeframe_abused_by_parent" id="timeframeAge" value="Age"> Age
                        </label>
                    </span>
                    <input type="text" class="form-control" name="age_abused_by_parent" />
                </div>
                <div class="input-group col-3">
                    <span class="input-group-addon">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="timeframe_abused_by_parent" id="timeframeYear" value="Year"> Year
                        </label>
                    </span>
                    <input type="text" class="form-control" name="year_abused_by_parent" />
                </div>
                <div class="input-group col-6">
                    <span class="input-group-addon">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="timeframe_abused_by_parent" id="timeframeRange" value="Range"> Range
                        </label>
                    </span>
                    <span class="input-group-addon">from:</span>
                    <input type="text" class="form-control" name="range_from_abused_by_parent" />
                    <span class="input-group-addon">to:</span>
                    <input type="text" class="form-control" name="range_to_abused_by_parent" />
                </div>
            </div>
          </fieldset>

          <hr />

          <fieldset>
              <legend>Graduate from high school</legend>
              <div class="form-row">
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_parent_arrested" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_parent_arrested" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_parent_arrested" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_parent_arrested" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_parent_arrested" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_parent_arrested" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_parent_arrested" />
                  </div>
              </div>
            </fieldset>

          <hr />

          <fieldset>
              <legend>Get a GED</legend>
              <div class="form-row">
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_homeless" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_homeless" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_homeless" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_homeless" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_homeless" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_homeless" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_homeless" />
                  </div>
              </div>
            </fieldset>

          <hr />

          <fieldset>
              <legend>Skip school regularly at any period of time</legend>
              <div class="form-row">
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_abused_by_non_parent" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_abused_by_non_parent" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_abused_by_non_parent" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_abused_by_non_parent" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_abused_by_non_parent" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_abused_by_non_parent" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_abused_by_non_parent" />
                  </div>
              </div>
            </fieldset>

          <hr />

          <fieldset>
              <legend>Ever leave school for a period of time</legend>
              <div class="form-row">
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_ran_away" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_ran_away" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_ran_away" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_ran_away" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_ran_away" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_ran_away" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_ran_away" />
                  </div>
              </div>
            </fieldset>

          <hr />

          <fieldset>
              <legend>Experienced abuse by a teacher (or someone else at school)</legend>
              <div class="form-row">
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_family_could_not_afford_basic_utils" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_family_could_not_afford_basic_utils" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_family_could_not_afford_basic_utils" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_family_could_not_afford_basic_utils" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_family_could_not_afford_basic_utils" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_family_could_not_afford_basic_utils" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_family_could_not_afford_basic_utils" />
                  </div>
              </div>
            </fieldset>

          <hr />



        <div class="row">
        <button type="submit" class="btn btn-primary btn-lg mx-auto my-4">Continue to Timeline &rarr;</button>
    </div>

</form>

@section('content')

@endsection
