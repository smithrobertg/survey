@extends('layouts.survey')

@section('title', 'Thank you - Gift Card')

@section('content')
<div class="media">
	<img src="images/umb-logo-001.jpg" class="d-flex mr-4" width="200" />
	<div class="media-body">
		<h2 class="display-1 ml-5 mt-5">Thank you.</h2>
	</div>
</div>

<div class="alert alert-primary border border-primary">
	<h4 class="mb-2"><strong>Thank you so much for your time participating in this survey.</strong></h4>
	<div class="lead">To receive your <strong>gift card</strong>, please email your survey code (<strong>{{ session('survey')->survey_code }}</strong>) to: <a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a></div>
</div>

<div class="alert alert-primary border border-primary">
	<h4 class="mb-2"><strong>Interested in participating in a follow-up phone or video interview?</strong></h4>
	<div class="lead">
		<p>For more information, please click <a href="{{ route('survey.followup-interview') }}">HERE</a> or email <a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a>.</p>
	</div>
</div>

<div class="alert alert-primary border border-primary">
	<h4 class="mb-2"><strong>Do you know someone else who might be eligible to take this survey?</strong></h4>
	<div class="lead">We would appreciate their participation! We will not be contacting potential participants directly in order to maintain confidentiality, so if you know of someone who might be eligible and interested in taking the survey, please send them the survey link along with the following IRB-approved statement:
		<ul class="mt-2"><li>Link to Survey: <a href="https://siegfriedt-survey.umb.edu">https://siegfriedt-survey.umb.edu</a></li></ul>
	</div>

	<div class="alert alert-secondary border border-secondary">
		<p>Hello,</p>
		<p>We invite anyone over the age of 18 to participate in a UMass Boston research project to offer your experience and expertise to study major life events and explore the transition to adulthood for individuals who identify as:</p>
		<ul>
			<li>Survivors of commercial sexual exploitation or sex trafficking</li>
			<li>Have been controlled by another person to sell sex as a payment for drugs or other need</li>
			<li>Have exchanged sex for money, drugs, food, shelter, or other needs</li>
			<li>Had sex for money because a boyfriend, girlfriend, spouse, or family member asked or forced them</li>
			<li>Has identified as a sex worker/made money selling sex.</li>
		</ul>
			<p>This study is survivor-informed.</p>
			<p>Your participation in this survey is estimated to take around 30-45 minutes. If you decide to participate, we will ask you about a number of life events that occur for both survivors and non-survivors. Some questions will be about exploitation and the sex trade but this is not the main focus of the study, instead, we are interested in learning more about your experiences within the larger context of your life.</p>
			<p>Your participation in this study is voluntary and you are free to withdraw from the study at any time or you may choose not to answer any specific questions.</p>
			<p>Your participation in this survey will help provide a necessary perspective in informing policy, best practices for service providers, and future research. As a thank you for your time in providing your expertise and experience, all participants will be provided with a $20 gift card.</p>
			<p>Participation is confidential.</p>
			<p>However, you will be asked to provide an email address which will only be used to email you the gift card information and follow up with an interview (only if that is something you have indicated wanting more information about).</p>
			<p>This study has been approved by the UMass Boston Institutional Review Board.</p>
			<p>For more information please email us at (study email address) or email the Principal Investigator of this study: Julianne Siegfriedt (Julianne.Siegfriedt@umb.edu), a PhD Candidate in the Sociology Department at UMass Boston.</p>
	</div>
</div>

<div class="col-4 mx-auto">
	<a href="{{ route('survey.survey-complete') }}" class="btn btn-success btn-lg">Survey Complete.  Thank you!</a>
</div>

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '100'])
@endsection
