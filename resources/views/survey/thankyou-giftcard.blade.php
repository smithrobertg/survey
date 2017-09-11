@extends('layouts.survey')

@section('title', 'Thank you - Gift Card')

@section('content')

<h2 class="text-center">Thank you/Gift Card info</h2>

<h3>Thank you so much for your time participating in this survey. </h3>

<div>To receive your gift card, please email code X (populated from client id) to: <a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a></div>

<form method="post" action="{{ route('survey.thankyou-giftcard') }}">
		{{ csrf_field() }}
		<div>Would you like information about participation in a follow-up interview?
			<div class="row">
					<div class="col-3"><a href="/followup-interview" class="btn btn-success btn-block">Yes please</a></div>
					<div class="col-3"><a href="/referral" class="btn btn-danger btn-block">No thank you</a></div>
			</div>
		</div>

		<div class="form-group">
				<label>Do you know someone else who might be ligible to take this survey?</label>
				<input type="text" class="form-control" name="know_someone_else_eligible" />
		</div>

		<button type="submit" class="btn btn-success">Continue</button>

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '68'])
@endsection
