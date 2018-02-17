@extends('layouts.survey')

@section('title', 'Thank you')

@section('content')
  <div class="jumbotron">
        <p class="display-4">
          Thank you for your time.  At this time you are not eligible to complete
          this survey.  If you have any questions, please contact the head
          researcher of the study, Julianne Siegfriedt, at
          <a href="mailto:lifeeventssurvey@umb.edu">lifeeventssurvey@umb.edu</a>
        </p>
  </div>
@endsection

@section('progress')
  <div class="progress">
    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
      Survey Halted - Not Eligible
    </div>
  </div>
@endsection
