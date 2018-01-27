@extends('layouts.survey')

@section('title', 'Followup Interview')

@section('content')

<h2 class="display-4 bg-secondary text-white text-center mt-3">Statement about Follow-up interview</h2>
<h3>Hello,</h3>
<p>Thank you for your participation in the survey and your interest in participating in a follow-up interview. Your valuable experience and expertise will help to better understand some of the major life events and explore the transition to adulthood for individuals who identify as:</p>
<ul>
  <li>Survivors of commercial sexual exploitation or sex trafficking
  <li>Have been controlled by another person to sell sex as a payment for drugs or other need
  <li>Exchanged sex for money, drugs, food, shelter, or other needs
  <li>Had sex for money because a boyfriend, girlfriend, spouse, or family member asked or forced them
  <li>Has identified as a sex worker/made money selling sex.
</ul>

<h3>About the follow-up interview:</h3>

<p>Participation in the interview is estimated to take around 30-45 minutes. If you decide to participate, we will set up a time for the interview which can be over the phone or video chat, whichever you are most comfortable doing.</p>
<p>We will ask some follow-up questions and additional detail about some of the questions you already answered in the survey. Like the survey, the interview will focus on different sections (like family or school for example) and connecting events/providing context that might be difficult to do in a survey. Some questions will be about exploitation and the sex trade but this is not the main focus of the study, instead, we are interested in learning more about your experiences within the larger context of your life.</p>
<p>Your participation in this study is voluntary and you are free to withdraw from the study at any time or you may choose not to answer any specific questions.</p>
<p>Your participation in this interview will help provide a necessary perspective in informing policy, best practices for service providers, and future research. As a thank you for your time in providing your expertise and experience, participants will be provided with an additional $30 gift card.</p>
<p>Participation is confidential.</p>
<p>However, your email address will be used to email you the gift card information.</p>
<p>This study has been approved by the <strong><em>UMass Boston Institutional Review Board</em></strong></p>
<p>For more information please email us at <a href="mailto:lifeeventssurvey@umb.edu">lifeeventssurvey@umb.edu</a> or email the Principal Investigator of this study: Julianne Siegfriedt (<a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a>), a PhD Candidate in the Sociology Department at UMass Boston.</p>

<hr />

<div class="alert alert-primary border border-primary">
	<h5>
		To schedule a <strong>follow-up interview</strong> or to ask any questions, email us at: <em><a href="mailto:lifeeventssurvey@umb.edu">lifeeventssurvey@umb.edu</a></em>.
	</h5>
</div>

<div class="alert alert-primary border border-primary">
	<h5 class="mb-2"><strong>Do you know someone else who might be ligible to take this survey?</strong></h5>
	<div class="lead">We would appreciate their participation! We will not be contacting potential participants directly in order to maintain confidentiality so if you know of someone who might be eligible and interested in taking the survey, please send them the survey link along with the following IRB-approved statement:
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

<hr />
<div class="row justify-content-center">
	<a href="{{ route('survey.survey-complete') }}" class="btn btn-success btn-lg">Survey Complete.  Thank you!</a>
</div>

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '100'])
@endsection
