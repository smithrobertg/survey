@extends('layouts.survey')

@section('title', 'Services - Followup')

@section('content')

<h2>TIMELINE OF SERVICES</h2>

    <form method="post" action="/services-timeline">
        {{ csrf_field() }}
        <p>For any of these questions, checked, present option for AGE, YEAR, RANGE and (hopefully) automatically populate in timeline.</p>

        <button type="submit" class="btn btn-primary">Continue to Timeline &rarr;</button>
    </form>
@endsection