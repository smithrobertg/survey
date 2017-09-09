@extends('layouts.survey')

@section('title', 'Survey - Welcome')

@section('content')
<div class="row">
    <div class="col-md-12">
        <img class="pull-right" height="100" src="images/umb-logo-001.jpg" />
        <h1>Welcome to the Doctoral Survey</h1>
        <ul>
            <li>Brief Introduction</li>
            <li><a href="/screening">Begin Survey... Proceed to screening questions</a></li>
            <li><a href="#">Request additional information</a></li>
        </ul>
    </div>
    <div class="text-center">
        <a href="/screening" class="btn btn-success btn-lg">Proceed to Screening Questions</a>
    </div>
    <div class="text-center">
        <h3 class="text-right"><em>Julianne Siegfriedt</em></h3>
    </div>
</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '0'])
@endsection
