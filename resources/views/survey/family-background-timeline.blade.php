@extends('layouts.survey')

@section('title', 'Timeline - Family Background')

@section('content')
<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occurred.  These events will be populated in timeline.</h3>
  <hr />
	    <form method="post" action="{{ route('survey.family-background-timeline') }}">
        {{ csrf_field() }}
        <fieldset>
            <legend>A parent abused you (physically, sexually, or emotionally)</legend>
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
                    <input type="text" class="form-control" name="range_from_abused_by_parent" placeholder="Age or Year" />
                    <span class="input-group-addon">to:</span>
                    <input type="text" class="form-control" name="range_to_abused_by_parent" placeholder="Age or Year" />
                </div>
            </div>
          </fieldset>

          <hr />

          <fieldset>
              <legend>A parent was arrested</legend>
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
                <legend>A parent was in prison</legend>
                <div class="form-row">
                    <div class="input-group col-3">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe_parent_in_prison" id="timeframeAge" value="Age"> Age
                            </label>
                        </span>
                        <input type="text" class="form-control" name="age_parent_in_prison" />
                    </div>
                    <div class="input-group col-3">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe_parent_in_prison" id="timeframeYear" value="Year"> Year
                            </label>
                        </span>
                        <input type="text" class="form-control" name="year_parent_in_prison" />
                    </div>
                    <div class="input-group col-6">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe_parent_in_prison" id="timeframeRange" value="Range"> Range
                            </label>
                        </span>
                        <span class="input-group-addon">from:</span>
                        <input type="text" class="form-control" name="range_from_parent_in_prison" />
                        <span class="input-group-addon">to:</span>
                        <input type="text" class="form-control" name="range_to_parent_in_prison" />
                    </div>
                </div>
              </fieldset>

          <hr />

          <fieldset>
              <legend>You experienced homelessness</legend>
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
              <legend>You experienced abuse (physical, sexual, or emotional) by a non-parent</legend>
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
              <legend>You ran away</legend>
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
              <legend>Your family could not afford heat or water (or other basic utilities)</legend>
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

          <fieldset>
              <legend>Your family experienced poverty</legend>
              <div class="form-row">
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_family_poverty" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_family_poverty" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_family_poverty" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_family_poverty" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_family_poverty" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_family_poverty" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_family_poverty" />
                  </div>
              </div>
            </fieldset>

          <hr />

          <fieldset>
              <legend>You were addicted to drugs or alcohol (before turning 18)</legend>
              <div class="form-row">
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_addicted_drugs_alcohol" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_addicted_drugs_alcohol" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_addicted_drugs_alcohol" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_addicted_drugs_alcohol" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe_addicted_drugs_alcohol" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_addicted_drugs_alcohol" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_addicted_drugs_alcohol" />
                  </div>
              </div>
            </fieldset>

            <hr />

            <fieldset>
                <legend>Entered foster care for the <strong>first time</strong></legend>
                <div class="form-row">
                    <div class="input-group col-3">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe_entered_foster_care" id="timeframeAge" value="Age"> Age
                            </label>
                        </span>
                        <input type="text" class="form-control" name="age_entered_foster_care" />
                    </div>
                    <div class="input-group col-3">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe_entered_foster_care" id="timeframeYear" value="Year"> Year
                            </label>
                        </span>
                        <input type="text" class="form-control" name="year_entered_foster_care" />
                    </div>
                    <!--
                    <div class="input-group col-6">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe_entered_foster_care" id="timeframeRange" value="Range"> Range
                            </label>
                        </span>
                        <span class="input-group-addon">from:</span>
                        <input type="text" class="form-control" name="range_from_entered_foster_care" />
                        <span class="input-group-addon">to:</span>
                        <input type="text" class="form-control" name="range_to_entered_foster_care" />
                    </div>
                    -->
                </div>
              </fieldset>

              <hr />

              <fieldset>
                  <legend>Exited foster care for the <strong>last time</strong></legend>
                  <div class="form-row">
                      <div class="input-group col-3">
                          <span class="input-group-addon">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="timeframe_exited_foster_care" id="timeframeAge" value="Age"> Age
                              </label>
                          </span>
                          <input type="text" class="form-control" name="age_exited_foster_care" />
                      </div>
                      <div class="input-group col-3">
                          <span class="input-group-addon">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="timeframe_exited_foster_care" id="timeframeYear" value="Year"> Year
                              </label>
                          </span>
                          <input type="text" class="form-control" name="year_exited_foster_care" />
                      </div>
                      <!--
                      <div class="input-group col-6">
                          <span class="input-group-addon">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="timeframe_exited_foster_care" id="timeframeRange" value="Range"> Range
                              </label>
                          </span>
                          <span class="input-group-addon">from:</span>
                          <input type="text" class="form-control" name="range_from_exited_foster_care" />
                          <span class="input-group-addon">to:</span>
                          <input type="text" class="form-control" name="range_to_exited_foster_care" />
                      </div>
                    -->
                  </div>
                </fieldset>

              <div class="row">
              <button type="submit" class="btn btn-primary btn-lg mx-auto my-4">Continue to Timeline &rarr;</button>
            </div>

        </form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '16'])
@endsection
