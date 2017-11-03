@extends('layouts.survey')

@section('title', 'Criminal Justice System')

@section('content')
<h2>CHECKLIST OF CRIMINAL JUSTICE EVENTS</h2>

<form method="post" action="{{ route('survey.criminal-justice') }}">
	{{ csrf_field() }}
	<fieldset class="form-group">
		<legend><h2>Have you…<em>(check all that apply)</em></h2></legend>

		<!-- Display Criminal Justice life event checklist -->
		@each('partials.life-event', $lifeEvents, 'lifeEvent')

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
    @include('partials.progress-bar', ['progress' => '60'])
@endsection
