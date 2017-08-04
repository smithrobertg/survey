@extends('layouts.survey')

@section('title', 'Thank you - Gift Card')

@section('content')

<h2>Thank you/Gift Card info</h2>

<p>Thank you so much for your time participating in this survey. </p>

<div>To receive your gift card, please email code X (populated from client id) to: <a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a></div>


<div>Would you like information about participation in a follow-up interview?
	<div><a href="/followup-interview">Yes (go to J38)</a></div>
	<div><a href="/referral">No (go to J39)</a></div>
</div>

@endsection