<!DOCTYPE html>
<html>
<head>
	<title>Survey List</title>
</head>
<body>
<h1>Surveys for Research Project</h1>
<table>
	<thead>
		<tr>
			<td>id</td>
			<td>participant_id</td>
			<td>started</td>
			<td>finished</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($surveys as $survey)
			<tr>
				<td>{{ $survey->id }}</td>
				<td><a href="/survey/{{ $survey->id }}">{{ $survey->participant_id }}</a></td>
				<td>{{ $survey->start_date }}</td>
				<td>{{ $survey->finish_date }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>