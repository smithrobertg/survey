<fieldset>
  <legend>{{ $timelineEvent->prompt}}</legend>
  <div class="form-row">
    <div class="input-group col-2">
      <span class="input-group-addon">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="timeframe_{{ $timelineEvent->id}}" id="timeframeAge_{{ $timelineEvent->id}}" value="Age"> Age
        </label>
      </span>
      <input type="text" class="form-control" name="age_{{ $timelineEvent->id}}" />
    </div>
    {{--
    <div class="input-group col-3">
      <span class="input-group-addon">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="timeframe_{{ $timelineEvent->id}}" id="timeframeYear_{{ $timelineEvent->id}}" value="Year"> Year
        </label>
      </span>
      <input type="text" class="form-control" name="year_{{ $timelineEvent->id}}" />
    </div>
    --}}
    <div class="input-group col-5">
      <span class="input-group-addon">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="timeframe_{{ $timelineEvent->id}}" id="timeframeRange_{{ $timelineEvent->id}}" value="Range"> Range
        </label>
      </span>
      <span class="input-group-addon">from:</span>
      <input type="text" class="form-control" name="range_from_{{ $timelineEvent->id}}" />
      <span class="input-group-addon">to:</span>
      <input type="text" class="form-control" name="range_to_{{ $timelineEvent->id}}" />
    </div>
	<div class="input-group col-5">
      <span class="input-group-addon">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="timeframe_{{ $timelineEvent->id}}" id="timeframeDontRemember_{{ $timelineEvent->id}}" value="Dont Remember">
        </label>
      </span>
      <label for="timeframeDontRemember_{{ $timelineEvent->id}}" class="form-control">I don't remember how old I was</label>
<!--      <input type="text" class="form-control" value="I don't remember how old I was" name="dont_remember_{{ $timelineEvent->id}}" /> -->
  </div>
</div>
</fieldset>

<hr />
