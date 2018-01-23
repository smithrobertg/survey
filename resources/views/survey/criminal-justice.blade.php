@extends('layouts.survey')

@section('title', 'Criminal Justice System')

@section('content')
<h2 class="bg-secondary text-white text-center">CRIMINAL JUSTICE EVENTS</h2>

<form method="post" action="{{ route('survey.criminal-justice') }}">
	{{ csrf_field() }}
	<fieldset class="form-group">
		<legend><h2>Have you…<em>(check all that apply)</em></h2></legend>

		<!-- Display Criminal Justice life event checklist -->
		@each('partials.life-event', $lifeEvents, 'lifeEvent')

		<hr />
		<div class="form-group">
			<label class="form-label" for="other_criminal_justice_events">
				<h5>Other events with the criminal justice system not mentioned above?</h5>
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
