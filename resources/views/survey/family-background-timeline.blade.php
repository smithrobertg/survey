@extends('layouts.survey')

@section('title', 'Timeline - Family Background')

@section('content')
<h3 class="bg-primary text-white p-3">For each of these questions, please enter AGE, YEAR, or RANGE the event(s) occured.  These events will be populated in timeline.</h3>
  <hr />
	    <form method="post" action="{{ route('survey.family-background-timeline') }}">
        {{ csrf_field() }}
        <fieldset>
            <legend>A parent abused you (physically, sexually, or emotionally)</legend>
            <div class="form-row">
                <div class="input-group col-3">
                    <span class="input-group-addon">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="timeframe_parent_abused" id="timeframeAge" value="Age"> Age
                        </label>
                    </span>
                    <input type="text" class="form-control" name="age_parent_abused" />
                </div>
                <div class="input-group col-3">
                    <span class="input-group-addon">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="timeframe_parent_abused" id="timeframeYear" value="Year"> Year
                        </label>
                    </span>
                    <input type="text" class="form-control" name="year_parent_abused" />
                </div>
                <div class="input-group col-6">
                    <span class="input-group-addon">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="timeframe_parent_abused" id="timeframeRange" value="Range"> Range
                        </label>
                    </span>
                    <span class="input-group-addon">from:</span>
                    <input type="text" class="form-control" name="range_from_parent_abused" />
                    <span class="input-group-addon">to:</span>
                    <input type="text" class="form-control" name="range_to_parent_abused" />
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
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_event" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_event" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_event" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_event" />
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
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_event" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_event" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_event" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_event" />
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
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_event" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_event" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_event" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_event" />
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
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_event" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_event" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_event" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_event" />
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
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_event" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_event" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_event" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_event" />
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
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_event" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_event" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_event" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_event" />
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
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeAge" value="Age"> Age
                          </label>
                      </span>
                      <input type="text" class="form-control" name="age_event" />
                  </div>
                  <div class="input-group col-3">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeYear" value="Year"> Year
                          </label>
                      </span>
                      <input type="text" class="form-control" name="year_event" />
                  </div>
                  <div class="input-group col-6">
                      <span class="input-group-addon">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="timeframe" id="timeframeRange" value="Range"> Range
                          </label>
                      </span>
                      <span class="input-group-addon">from:</span>
                      <input type="text" class="form-control" name="range_from_event" />
                      <span class="input-group-addon">to:</span>
                      <input type="text" class="form-control" name="range_to_event" />
                  </div>
              </div>
            </fieldset>

            <hr />

            <fieldset>
                <legend>Lived in foster care (age entered and age exited)</legend>
                <div class="form-row">
                    <div class="input-group col-3">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe" id="timeframeAge" value="Age"> Age
                            </label>
                        </span>
                        <input type="text" class="form-control" name="age_event" />
                    </div>
                    <div class="input-group col-3">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe" id="timeframeYear" value="Year"> Year
                            </label>
                        </span>
                        <input type="text" class="form-control" name="year_event" />
                    </div>
                    <div class="input-group col-6">
                        <span class="input-group-addon">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="timeframe" id="timeframeRange" value="Range"> Range
                            </label>
                        </span>
                        <span class="input-group-addon">from:</span>
                        <input type="text" class="form-control" name="range_from_event" />
                        <span class="input-group-addon">to:</span>
                        <input type="text" class="form-control" name="range_to_event" />
                    </div>
                </div>
              </fieldset>

              <div class="row">
              <button type="submit" class="btn btn-primary btn-lg mx-auto my-4">Continue to Timeline &rarr;</button>
            </div>

        </form>
<hr />

	<ul>
		@foreach ($timelineEvents as $event)
			<li>{{ $event }}</li>
		@endforeach
	</ul>

    <a href="/timeline/family-background" class="btn btn-primary my-4">Continue &rarr;</a>
@endsection
