@extends('layouts.survey')

@section('title', 'Criminal Justice System - Followup')

@section('content')

<h2>ADDITIONAL CRIMINAL JUSTICE QUESTIONS</h2>

<form method="post" action="/criminal-justice-followup">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="issues_because_of_criminal_record">
			If YES for criminal record, ask: Have you experienced issues in other areas because of having a criminal record (housing, getting a job, etc.)?
		</label>
		<textarea class="form-control" name="issues_because_of_criminal_record" id="issues_because_of_criminal_record" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="arrested_charges">
			If Arrested, what were the charges?
		</label>
		<textarea class="form-control" name="arrested_charges" id="arrested_charges" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="convicted_charges">
			If Convicted, what were the charges?
		</label>
		<textarea class="form-control" name="convicted_charges" id="convicted_charges" rows="3"></textarea>
	</div>

	<button class="btn btn-primary btn-lg" type="submit">Save and Continue to Exploitation &rarr;</button>

</form>


@endsection