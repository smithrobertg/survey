@extends('layouts.survey')

@section('title', 'Referral')

@section('content')

<h2>Referral</h2>

<p>If you know of anyone else who may be eligible for this survey, please send them this message with the link (INSERT LINK):</p>

Hello,

We invite anyone over the age of 18 to participate in a UMass Boston research project to offer your experience and expertise to study major life events and explore the transition to adulthood for individuals who identify as:

<ul>
	<li>Survivors of commercial sexual exploitation or sex trafficking</li>
	<li>Have been controlled by another person to sell sex as a payment for drugs or other need</li>
	<li>Exchanged sex for money, drugs, food, shelter, or other needs</li>
	<li>Had sex for money because a boyfriend, girlfriend, spouse, or family member asked or forced them</li>
	<li>Has identified as a sex worker/made money selling sex.</li>
</ul>

This study is survivor-informed.

Your participation in this survey is estimated to take around 30 minutes. If you decide to participate, we will ask you about a number of life events that occur for both survivors and non-survivors. Some questions will be about exploitation and the sex trade but this is not the main focus of the study, instead, we are interested in learning more about your experiences within the larger context of your life.

Your participation in this study is voluntary and you are free to withdraw from the study at any time or you may choose not to answer any specific questions.

Your participation in this survey will help provide a necessary perspective in informing policy, best practices for service providers, and future research. As a thank you for your time in providing your expertise and experience, all participants will be provided with a $20 gift card.

Participation is confidential.
However, you will be asked to provide an email address which will only be used to email you the gift card information and follow up with an interview (only if that is something you have indicated wanting more information about).

This study has been approved by the
UMass Boston Institutional Review Board

For more information please email us at (study email address) or email the Principal Investigator of this study: Julianne Siegfriedt (<a href="Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a>), a PhD Candidate in the Sociology Department at UMass Boston.

@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '100'])
@endsection
