@extends('layouts.survey')

@section('title', 'Consent')

@section('head')
<style>
    #formTitle {
        border: 1px solid;
        text-align: center;
    }
</style>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid bg-light my-0 py-1">
  <h2 class="text-center border border-primary" id="formTitle">
      UMASS BOSTON INSTITUTIONAL REVIEW BOARD
  </h2>
  <h3 class="text-center">
      University of Massachusetts Boston<br />
      Department of Sociology<br />
      100 Morrissey Boulevard<br />
      Boston, MA.  02125-3393<br />
  </h3>
  <div class="lead text-center">Survey Code: {{ $survey->survey_code }} (ID: {{ $survey->id }})</div>
</div>
<div class="row">
    <div class="col-10 mx-auto">
        <form method="post" action="{{ route('survey.consent') }}">
            {{ csrf_field() }}
            <h3 class="text-center"><strong>Consent Form for the Study of Life Events: Survey</strong></h3>
            <p>
                Thank you for your interest in this survey and study. We are asking you to take part in a research project to offer your experience and expertise to study major life events and explore the transition to adulthood for individuals who identify as survivors of commercial sexual exploitation or sex trafficking, exchanged sex for money, drugs, food, shelter, or other needs, have been controlled by another person to sell sex as a payment for drugs or other need, had sex for money because a boyfriend, girlfriend, spouse, or family member asked or forced them, or has identified as a sex worker/made money selling sex. This study involves a survey about different life events. At the end of this survey, you may be asked to participate in an additional follow-up interview but are not at all required to do so.
            </p>
            <p>
                The head researcher for this study is PhD Candidate, Julianne Siegfriedt, MA in the Department of Sociology at UMass Boston. Please read this letter and feel free to ask questions. You may contact Julianne directly with any questions at 617-750-7425 or email at <a href="mailto:Julianne.Siegfriedt@umb.edu">Julianne.Siegfriedt@umb.edu</a>. You may also contact the faculty advisor, Stephanie Hartwell, PhD at <a href="mailto:Stephanie.Hartwell@umb.edu">Stephanie.Hartwell@umb.edu</a> or at 617-287-6529.
            </p>
            <h3><strong>Description of the Project</strong></h3>
            <p>The purpose of this research is to answer three questions about survivors:</p>
            <ol class="col-sm-offset-1">
                <li>What obstacles with family, school, work, social, and criminal justice system exist?</li>
                <li>How did interactions with these institutions change after turning 18?</li>
                <li>What resources/supports were helpful and what supports would have been helpful?</li>
            </ol>
            <p>
                Your participation in this survey is estimated to take around 30 minutes. If you decide to participate, we will ask you about a number of life events that occur for both survivors and non-survivors throughout different time periods in life. Each section will be about a certain subject area (like family or school for example) and after noting specific events, we will ask you to think about the time period (to the best of your ability) that the events took place. Some questions will be about exploitation and the sex trade but this is not the main focus of the study, instead, we are interested in learning more about your experiences within the larger context of your life. This survey will ask briefly about some illegal activities like selling sex, drug use, etc. so it is important that you know that what you answer will be kept <strong>confidential</strong> and will not be made available, published, or presented in any way that anyone could identify you.  In fact, other than your email address, we will not be collecting any identifying information about you and your email address will only be used to email you the gift card information and follow up with an interview if that is something you indicate wanting more information about.
            </p>
            <p>
                To thank you for participating in this research we will give you a $20 gift card. You get this gift card even if you decide to stop taking the survey, ask us to delete the data, or don’t want to answer any question.
            </p>
            <p>
                After the survey we will ask you if you know of anyone else that might be eligible for the survey and give you information about sending the link to other potential survivors. You helping us find other people to take the survey would help us describe the full range of people’s experiences.
            </p>
            <h3>Risks or Discomforts</h3>
            <p>
                The main risks are that you may feel negative or disturbing feelings during the survey or after and that information about you will be inadvertently released. You may speak with the lead researcher, Julianne Siegfriedt, to discuss any distress or other issues related to your participation in this survey. You can also contact the 24-hour National Human Trafficking Resource Center for immediate help at 1 (888) 373-7888 (or text HELP or INFO to 233733).
            </p>
            <h3>Confidentiality</h3>
            <p>
                Your part in this research is <strong>confidential</strong>.  This means that what you say will not be published or presented in a way that would allow anyone to know it was you. We will not record your name or any other information that would allow someone to know it was you. Your survey will be attached to a code and that code will be used to connect to your follow-up interview if one is completed. At no point will we ask you to sign anything.
            </p>
            <h3>Voluntary Participation</h3>
            <p>
                It is up to you to decide if you want to participate in this research. If you do, you may stop talking with us at any time without any consequences. You can also refuse to answer any questions. If you wish to stop participating in the survey, you may stop the survey at any time. Whatever you decide will in no way penalize you and you will still receive a gift card.
            </p>
            <h3>Rights</h3>
            <p>
                You have the right to ask questions about this research before you agree to participate and at any time during the survey. You can reach Julianne Siegfriedt at 617-750-7425 or at Julianne.Siegfriedt@umb.edu If you have any questions or concerns about your rights as a research participant, please contact a representative of the Institutional Review Board (IRB), at the University of Massachusetts, Boston, which oversees research involving human participants.  The Institutional Review Board may be reached at the following address: IRB, Quinn Administration Building-2-080, University of Massachusetts Boston, 100 Morrissey Boulevard, Boston, MA  02125-3393. You can also contact the Board by telephone or e-mail at (617) 287-5374 or at human.subjects@umb.edu.
            </p>
            <div class="well">
                <h2 class="text-info">
                    Would you like to participate in the research? You saying yes will be considered as consent.
                </h2>
                <h2 class="text-center">
                    <label class="radio-inline text-success"><input type="radio" name="consent" id="consentYes" value="Yes" /> Yes</label>
                    <label class="radio-inline text-danger"><input type="radio" name="consent" id="consentNo" value="No" /> No</label>
                </h2>
            </div>            <p>
                Please keep a copy of this form for your records if you need to contact me. It is also okay to not keep this form for confidentiality. Thank you for your time.
            </p>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg col-6 mb-3">Continue &rarr;</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('progress')
    @include('partials.progress-bar', ['progress' => '4'])
@endsection
