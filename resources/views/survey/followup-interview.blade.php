@extends('layouts.survey')

@section('title', 'Followup Interview')

@section('content')

<h2 class="text-center">Statement about Follow-up interview</h2>
<p>Hello,</p>
<br />
<p>Thank you for your participation in the survey and your interest in participating in a follow-up interview. Your valuable experience and expertise will help to better understand some of the major life events and explore the transition to adulthood for individuals who identify as:</p>
<ul>
  <li>Survivors of commercial sexual exploitation or sex trafficking
  <li>Have been controlled by another person to sell sex as a payment for drugs or other need
  <li>Exchanged sex for money, drugs, food, shelter, or other needs
  <li>Had sex for money because a boyfriend, girlfriend, spouse, or family member asked or forced them
  <li>Has identified as a sex worker/made money selling sex.
</ul>
About the follow-up interview:

Participation in the interview is estimated to take around 30-45 minutes. If you decide to participate, we will set up a time for the interview which can be over the phone or video chat, whichever you are most comfortable doing.

We will ask some follow-up questions and additional detail about some of the questions you already answered in the survey. Like the survey, the interview will focus on different sections (like family or school for example) and connecting events/providing context that might be difficult to do in a survey. Some questions will be about exploitation and the sex trade but this is not the main focus of the study, instead, we are interested in learning more about your experiences within the larger context of your life.

Your participation in this study is voluntary and you are free to withdraw from the study at any time or you may choose not to answer any specific questions.

Your participation in this interview will help provide a necessary perspective in informing policy, best practices for service providers, and future research. As a thank you for your time in providing your expertise and experience, participants will be provided with an additional $30 gift card.

Participation is confidential.
However, your email address will be used to email you the gift card information.

This study has been approved by the
UMass Boston Institutional Review Board

For more information please email us at (study email address) or email the Principal Investigator of this study: Julianne Siegfriedt (<a href="Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a>), a PhD Candidate in the Sociology Department at UMass Boston.
<hr />
<div class="alert alert-primary border border-primary">
	<div class="lead">
		To schedule a follow-up interview or to ask any questions, email us at <strong><a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a></strong>.
	</div>
</div>
<hr />
<div class="col-2 mx-auto">
	<a href="{{ route('survey.survey-complete') }}" class="btn btn-success btn-lg">Survey Complete.  Thank you!</a>
</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '100'])
@endsection
