@extends('layouts.survey')

@section('title', 'Criminal Justice System - Followup')

@section('content')
<h2 class="bg-secondary text-white text-center">ADDITIONAL CRIMINAL JUSTICE QUESTIONS</h2>

<form method="post" action="/criminal-justice-followup">
	{{ csrf_field() }}
	<div class="alert alert-primary border border-primary">
		<div class="form-group">
			<label for="issues_because_of_criminal_record">
				If YES for criminal record, have you experienced issues in other areas because of having a criminal record (housing, getting a job, etc.)? Please explain.
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
	</div>
	<div class="row justify-content-center">
		<button class="btn btn-primary btn-lg" type="submit">Save and Continue to Exploitation &rarr;</button>
	</div>
</form>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '69'])
@endsection
