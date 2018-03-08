<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Survey - @yield('title')</title>

		<!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- Optional theme -->
	<!--
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	-->
	    @yield('head')

	</head>
	<body style="padding-bottom: 60px">
		<div class="container">
				@yield('content')
		</div>

		<div class="container" id="timeline-reference">
			<h4 class="bg-warning text-white text-center">Timeline for Reference</h4>

			@each('survey.timeline.orientation-timeline', \App\Orientation::where('survey_id', session('survey_id'))->get(), 'orientation')
			{{--
			  <!-- Changed this "@include" to the above "@each" directive because this crashed the view when 'orientation' was empty -->
			  @include('survey.timeline.orientation-timeline', [ 'orientation' => \App\Orientation::where('survey_id', session('survey_id'))->first() ])
			--}}

			@foreach(\App\Category::all()->get() as $category)
			  @include('partials.timeline-event-category', ['timelineEvents' => \App\Survey::find(session('survey_id'))
																				->timeline_events()
																				->with('life_event')
																				->orderBy('id')
																				->get()
														   ])
			@endforeach

		</div>

		<!-- Progress bar for survey -->
		<div class="container-fluid fixed-bottom bg-secondary text-white">
			<div class="row d-flex align-items-center py-2">
				<div class="h5 col-2 text-center">
						Survey Progress
				</div>
				<div class="col-9">
						@yield('progress')
				</div>
			</div>
		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
