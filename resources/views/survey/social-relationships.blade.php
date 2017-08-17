@extends('layouts.survey')

@section('title', 'Social Relationships')

@section('content')
<h2>CHECKLIST OF SOCIAL RELATIONSHIP EVENTS</h2>

<form method="post" action="/social-relationships">
    <fieldset class="form-group">
        <legend><em>Have you…(check all that apply)</em></legend>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Dated" />
                Dated
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Married" />
                Been married
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Pregnant" />
                Been pregnant
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Had child" />
                Had a child (by birth or adoption)
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Had healthy relationship" />
                Had a healthy romantic relationship
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Violence by partner" />
                Experienced violence by a partner
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Emotional abuse by partner" />
                Experienced emotional abuse by a partner
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Lost custody of child" />
                Lost custody of a child
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Regained custody of child" />
                Regained custody of a child
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Lost important friendship" />
                Lost an important friendship
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Struggled trusting people" />
                Struggled with trusting people
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Struggled finding healthy relationships" />
                Struggled with finding healthy relationships
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Struggled having relationships with family as adult" />
                Struggled having relationships with your family as an adult
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Tried to reconnect strained relationship" />
                Tried to reconnect with anyone as an adult when that was a strained relationship in the past
            </label>
        </div>
        <fieldset class="form-group">
            <legend>If checked, would you categorize that attempt as a positive/negative experience?</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="tried_to_reconnect_experience" id="triedReconnect-Positive" value="Positive" />
                    Positive
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="tried_to_reconnect_experience" id="triedReconnect-Negative" value="Negative" />
                    Negative
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="tried_to_reconnect_experience" id="triedReconnect-Neither" value="Neither" />
                    Neither
                </label>
            </div>
        </fieldset>

        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Had positive support w/unconditional trust" />
                Had positive support in your life that you trusted unconditionally?
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Got involved community orgs" />
                Gotten involved with any community organizations
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="social_relationship_events[]" value="Started attending religious services" />
                Started attending religious services/events as an adult
            </label>
        </div>

        <div class="form-group">
            <label class="form-label" for="other_social_relationship_events">
                Other major events with social relationships not mentioned above?
            </label>
            <textarea class="form-control" name="other_social_relationship_events" id="other_social_relationship_events" rows="3"></textarea>
        </div>
    </fieldset>

    <button class="btn btn-primary">Save and Continue &rarr;</button>

</form>
@endsection