<div class="alert alert-primary border border-primary">
  <h3>Orientation</h3>
  <div>
    <span class="h6"><em>Childhood Event: &nbsp; {{ $orientation->childhood_event_description }}</em></span>
    &nbsp;
    <em>
      (Age: {{ $orientation->childhood_event_age }})
    </em>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: {{ $orientation->childhood_event_age }}%;" aria-valuenow="{{ $orientation->childhood_event_age }}" aria-valuemin="0" aria-valuemax="100"></div>
    <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="{{ $orientation->childhood_event_age + 5 }}" aria-valuemin="0" aria-valuemax="100">
      {{ $orientation->childhood_event_age }}
    </div>
    <div class="progress-bar" role="progressbar" style="width: {{ 95 - $orientation->childhood_event_age }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <hr />
  <div>
    <span class="h6"><em>Adolescence Event: &nbsp; {{ $orientation->adolescence_event_description }}</em></span>
    &nbsp;
    <em>
      (Age: {{ $orientation->adolescence_event_age }})
    </em>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: {{ $orientation->adolescence_event_age }}%;" aria-valuenow="{{ $orientation->adolescence_event_age }}" aria-valuemin="0" aria-valuemax="100"></div>
    <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="{{ $orientation->adolescence_event_age + 5 }}" aria-valuemin="0" aria-valuemax="100">
      {{ $orientation->adolescence_event_age }}
    </div>
    <div class="progress-bar" role="progressbar" style="width: {{ 95 - $orientation->adolescence_event_age }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <hr />
  <div>
    <span class="h6"><em>Adulthood Event: &nbsp; {{ $orientation->adulthood_event_description }}</em></span>
    &nbsp;
    <em>
      (Age: {{ $orientation->adulthood_event_age }})
    </em>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: {{ $orientation->adulthood_event_age }}%;" aria-valuenow="{{ $orientation->adulthood_event_age }}" aria-valuemin="0" aria-valuemax="100"></div>
    <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="{{ $orientation->adulthood_event_age + 5 }}" aria-valuemin="0" aria-valuemax="100">
      {{ $orientation->adulthood_event_age }}
    </div>
    <div class="progress-bar" role="progressbar" style="width: {{ 95 - $orientation->adulthood_event_age }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
