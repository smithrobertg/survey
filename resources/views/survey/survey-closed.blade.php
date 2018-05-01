@extends('layouts.survey')

@section('title', 'Survey - Welcome')

@section('content')
<div class="jumbotron border border-primary mt-3">
    <div class="media">
        <img src="images/umb-logo-001.jpg" class="d-flex mr-4" width="200" />
        <div class="media-body">
          <h3 class="display-4x">Thank you for your interest in the Life Events Survey. At this point the survey is closed
            and we are no longer accepting new participants.</h3>
          <hr />
          <h3 class="display-4x">If you have any questions about this survey or future research, please contact the lead
            researcher, Julianne Siegfriedt, at <a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a></h3>
</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '0'])
@endsection
