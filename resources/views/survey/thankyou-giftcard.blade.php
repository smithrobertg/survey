@extends('layouts.survey')

@section('title', 'Thank you - Gift Card')

@section('content')

<h2 class="text-center">Thank you/Gift Card info</h2>

<h3>Thank you so much for your time participating in this survey. </h3>

<div>To receive your gift card, please email code X (populated from client id) to: <a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a></div>


<div>Would you like information about participation in a follow-up interview?
	<div class="row">
			<div class="col-3 offset-1"><a href="/followup-interview" class="btn btn-success btn-lg btn-block">Yes please</a></div>
			<div class="col-3 offset-1"><a href="/referral" class="btn btn-danger btn-lg btn-block">No thank you</a></div>
	</div>
</div>
@endsection
