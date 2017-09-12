@extends('layouts.survey');

@section('title', 'Survey - Thank you')

@section('content')
	<h2 class="text-center">Thank you for participating.</h2>
		<h4><br />Your confidential Survey Code is:  {{ $survey->survey_code }} (ID: {{ $survey->id }})
		<br />Please record this number in case you need to stop the survey and resume at another time.  This Participant ID may also be used for confidential communication with the researcher.</h4>
		<div class="row">
			<div class="card col-10 mx-auto my-4">
				<div class="card-block p-3">
					<h5>Thank you for taking the time to participate in this survey. We value your opinions and expertise. In each section you will be asked a series of questions about events that may have happened in your life. Following each list you will be asked to place some of the events in a timeline. We are asking that you answer the questions to the best of your knowledge and estimation. You may skip any questions you do not want to answer.</h5>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<a href="{{ route('survey.demographics') }}" class="btn btn-lg btn-success col-4">Continue</a>
	</div>
@endsection

@section('progress')
		@include('partials.progress-bar', ['progress' => '6'])
@endsection
