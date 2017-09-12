@extends('layouts.survey')

@section('title', 'Survey - Welcome')

@section('content')
<div class="jumbotron">
    <div class="media">
        <img src="images/umb-logo-001.jpg" class="d-flex mr-4" width="200" />
        <div class="media-body">
            <div class="display-4 mt-0">Welcome to the Doctoral Survey</div>
            <ul class="lead">
                <li>Brief Introduction</li>
                <li><a href="#">Request additional information</a></li>
            </ul>
            <div class="text-right">
                <div class="h3 mr-5"><em>- Julianne Siegfriedt</em></div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('survey.screening') }}" class="btn btn-success btn-lg">Proceed to Screening Questions</a>
    </div>
</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '0'])
@endsection
