<!DOCTYPE html>
<html>
<head>
	<title>Survey - Thank you</title>
</head>
<body>
<h2 class="text-center">Thank you for participating.</h2>
	<h3><br />Your confidential survey Particiant ID is:  {{ $participant_id }} (Survey ID: {{ $survey_id }})
	<br />Please record this number in case you need to stop the survey and resume at another time.  This Participant ID may also be used for confidential communication with the researcher.</h3>
<div class="row">
	<div class="well col-sm-offset-2 col-sm-8">
		Thank you for taking the time to participate in this survey. We value your opinions and expertise. In each section you will be asked a series of questions about events that may have happened in your life. Following each list you will be asked to place some of the events in a timeline. We are asking that you answer the questions to the best of your knowledge and estimation. You may skip any questions you do not want to answer.
	</div>
</div>
<div class="row text-center">
	<a href="/survey/{{ $survey_id }}/demographics" class="btn btn-lg btn-success">Continue</a>
</div>
</body>
</html>