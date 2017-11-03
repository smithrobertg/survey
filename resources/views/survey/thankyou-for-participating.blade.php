@extends('layouts.survey');

@section('title', 'Survey - Thank you')

@section('content')
<div class="jumbotron pt-5">
		<div class="display-3 mb-5 text-center">Thank you for participating.</div>
		<div class="alert alert-danger border border-danger col-11 mx-auto">
			<div class="h2 text-center mt-2">Your confidential Survey Code is:<br /><strong>{{ $survey->survey_code }}</strong></div>
			<div class="lead mx-4">Please record this number in case you need to stop the survey and/or followup with the researcher.  This Survey Code may also be used for confidential communication with the researcher.</div>
		</div>
		<hr />
		<div class="card alert alert-primary border border-primary col-11 mx-auto my-4">
			<div class="card-block p-3">
				<div class="lead">Thank you for taking the time to participate in this survey. We value your opinions and expertise. In each section you will be asked a series of questions about events that may have happened in your life. Following each list you will be asked to place some of the events in a timeline. We are asking that you answer the questions to the best of your knowledge and estimation. You may skip any questions you do not want to answer.</div>
			</div>
		</div>
	<div class="row justify-content-center">
		<a href="{{ route('survey.demographics') }}" class="btn btn-lg btn-primary col-4">Continue</a>
	</div>
</div>
@endsection

@section('progress')
		@include('partials.progress-bar', ['progress' => '9'])
@endsection
