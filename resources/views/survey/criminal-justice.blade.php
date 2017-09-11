@extends('layouts.survey')

@section('title', 'Criminal Justice System')

@section('content')

<h2>CHECKLIST OF CRIMINAL JUSTICE EVENTS</h2>

<form method="post" action="/criminal-justice">
	{{ csrf_field() }}
	<fieldset class="form-group">
		<legend><h2>Have you…<em>(check all that apply)</em></h2></legend>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Arrested" />
				Ever been arrested
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Detained but not charged" />
				Ever been detained but not charged
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Convicted/found guilty" />
				Ever been convicted/found guilty
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Incarcerated" />
				Ever been incarcerated (been to prison or jail)
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Reported crime to police" />
				Ever reported a crime to the police
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Negative interaction w/police" />
				Ever had a negative interaction with a police officer
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Positive interaction w/police" />
				Ever had a positive interaction with a police officer
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Solicited sexually by police officer" />
				Ever been solicited/asked to do anything sexual by a police officer
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="criminal_justice_events[]" value="Criminal record" />
				Had a criminal record
			</label>
		</div>
		</fieldset>

		<div class="form-group">
			<label class="form-label" for="other_criminal_justice_events">
				Other events with the criminal justice system not mentioned above?
			</label>
			<textarea class="form-control" name="other_criminal_justice_events" id="other_criminal_justice_events" rows="3"></textarea>
		</div>
	</fieldset>

	<button class="btn btn-primary">Save and Continue &rarr;</button>

</form>

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '42'])
@endsection
