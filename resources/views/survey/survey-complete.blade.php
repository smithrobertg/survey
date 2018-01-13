@extends('layouts.survey')

@section('title', 'Survey Complete')

@section('content')

  <div class="alert alert-danger border border-danger mt-5">
    <div class="text-center">
      <h3>The survey is now complete.</h3>
      <h4>Thank you so much for your time.</h4>
    </div>
  </div>

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '100'])
@endsection
