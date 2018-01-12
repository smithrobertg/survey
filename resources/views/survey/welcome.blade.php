@extends('layouts.survey')

@section('title', 'Survey - Welcome')

@section('content')
<div class="jumbotron">
    <div class="media">
        <img src="images/umb-logo-001.jpg" class="d-flex mr-4" width="200" />
        <div class="media-body">
          <h3 class="display-4 text-center">Welcome to the Study of Life Events Survey</h3>
          <hr />
          <h4><strong>Message from the Research Team:</strong></h4>
          <p>Hello,<br />
          We invite anyone over the age of 18 to participate in a UMass Boston research project to offer your experience and expertise to study major life events and explore the transition to adulthood for individuals who identify as:</p>
<ul><li>Survivors of commercial sexual exploitation or sex trafficking</li>
          <li>Have been controlled by another person to sell sex as a payment for drugs or other need</li>
          <li>Have exchanged sex for money, drugs, food, shelter, or other needs</li>
          <li>Had sex for money because a boyfriend, girlfriend, spouse, or family member asked or forced them</li>
          <li>Has identified as a sex worker/made money selling sex.</li></ul>
          <h5>This study is survivor-informed.</h5>
          <p>Your participation in this survey is estimated to take around 30-45 minutes. If you decide to participate, we will ask you about a number of life events that occur for both survivors and non-survivors. Some questions will be about exploitation and the sex trade but this is not the main focus of the study, instead, we are interested in learning more about your experiences within the larger context of your life.</p>
          <p>Your participation in this study is voluntary and you are free to withdraw from the study at any time or you may choose not to answer any specific questions.
          <p>Your participation in this survey will help provide a necessary perspective in informing policy, best practices for service providers, and future research. As a thank you for your time in providing your expertise and experience, all participants will be provided with a $20 gift card.
          <p>Participation is confidential.
          <p>However, you will be asked to provide an email address which will only be used to email you the gift card information and follow up with an interview (only if that is something you have indicated wanting more information about).
          <p>This study has been approved by the<br />
          UMass Boston Institutional Review Board</p>
          <p>For more information please email us at (study email address) or email the Principal Investigator of this study: Julianne Siegfriedt (Julianne.Siegfriedt@umb.edu), a PhD Candidate in the Sociology Department at UMass Boston.</p>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('survey.screening') }}" class="btn btn-success btn-lg">Proceed to Screening Questions</a>
    </div>
</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '0'])
@endsection
