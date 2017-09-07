@extends('layouts.test')

@section('title', 'Partial Views')

@section('content')
  <h1>Testing Partial View</h1>
  <form>
    @foreach($categories as $category)
      @include('partials.category')
    @endforeach
  </form>
@endsection
