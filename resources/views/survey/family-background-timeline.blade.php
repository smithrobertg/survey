@extends('layouts.survey')

@section('title', 'Timeline - Family Background')

@section('content')
<p>For any of these questions, checked, present option for AGE, YEAR, RANGE and (hopefully) automatically populate in timeline.</p>
 	A parent abused you (physically, sexually, or emotionally)
 	A parent was arrested
 	You experienced homelessness
 	You experienced abuse (physical, sexual, or emotional) by a non-parent
 	You ran away
 	Your family could not afford heat or water (or other basic utilities)
 	Your family experienced poverty
 	You were addicted to drugs or alcohol (before turning 18)
 	Lived in foster care (age entered and age exited)</p>
	
	<ul>
		@foreach ($timelineEvents as $event)
			<li>$event</li>
		@endforeach
	</ul>
	    <form>
            <fieldset class="col-6 mb-3">
                <div class="input-group">
                    <span class="input-group-addon bg-primary">
                        <input type="radio" name="timeframe" aria-label="Age" />
                    </span>
                    <span class="input-group-addon col-2">Age</span>
                    <input type="text" class="form-control" name="age_event" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon bg-primary">
                        <input type="radio" name="timeframe" aria-label="Year" />
                    </span>
                    <span class="input-group-addon col-2">Year</span>
                    <input type="text" class="form-control" name="year_event" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon bg-primary">
                        <input type="radio" name="timeframe" aria-label="Range" />
                    </span>
                    <span class="input-group-addon col-2">Range</span>
                    <span class="input-group-addon">from:</span>
                    <input type="text" class="form-control" name="range_from_event" />
                    <span class="input-group-addon">to:</span>
                    <input type="text" class="form-control" name="range_to_event" />
                </div>
            </fieldset>

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
        </form>

    <a href="/timeline/family-background" class="btn btn-primary">Continue &rarr;</a>
@endsection
