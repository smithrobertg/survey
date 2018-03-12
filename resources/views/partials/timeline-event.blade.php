<hr />

<div>
  <span class="h6"><em>{{ $timelineEvent->life_event->event }}</em></span>
  &nbsp;
  <em>
  @if(!empty($timelineEvent->age))
    (Age: {{ $timelineEvent->age }})
  @endif
  @if(!empty($timelineEvent->range_to) || !empty($timelineEvent->range_from))
    (Range: {{ $timelineEvent->range_from }} to {{ $timelineEvent->range_to }})
  @endif
  </em>
</div>

@if(is_numeric($timelineEvent->age))  {{-- !empty($timelineEvent->age) && is_numeric($timelineEvent->age) --}}
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: {{ $timelineEvent->age }}%;" aria-valuenow="{{ $timelineEvent->age }}" aria-valuemin="0" aria-valuemax="100"></div>
    <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="{{ $timelineEvent->age + 5 }}" aria-valuemin="0" aria-valuemax="100">
      {{ $timelineEvent->age }}
    </div>
    <div class="progress-bar" role="progressbar" style="width: {{ 95 - $timelineEvent->age }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
@endif

@if(is_numeric($timelineEvent->range_from) && is_numeric($timelineEvent->range_to)) {{-- !empty($timelineEvent->range_to) && !empty($timelineEvent->range_from) --}}
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: {{ $timelineEvent->range_from }}%;" aria-valuenow="{{ $timelineEvent->range_from }}" aria-valuemin="0" aria-valuemax="100"></div>
    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $timelineEvent->range_to - $timelineEvent->range_from + 5 }}%;" aria-valuenow="{{ $timelineEvent->range_to }}" aria-valuemin="0" aria-valuemax="100">
      {{ $timelineEvent->range_from }} - {{ $timelineEvent->range_to }}
    </div>
    <div class="progress-bar" role="progressbar" style="width: {{ 95 - ($timelineEvent->range_to-$timelineEvent->range_from) - $timelineEvent->range_from }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
@endif

@if($timelineEvent->timeframe == "Dont Remember")
  <em>I don't remember how old I was</em>
@endif