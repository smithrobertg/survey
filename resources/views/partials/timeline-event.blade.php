<h6>
  Category {{ $timelineEvent->life_event->event_category_id }}:
  {{ App\EventCategory::find($timelineEvent->life_event->event_category_id)->category }}
  <br />
  <em>{{ $timelineEvent->life_event->event }}
  ({{ $timelineEvent->timeframe }}: {{ $timelineEvent->age }} {{ $timelineEvent->range_from }} {{ $timelineEvent->range_to }})
</h6>

<em>Age:</em> {{ $timelineEvent->age }}
<div class="progress">
  <!--
  <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
    {{ $timelineEvent->timeframe }}: {{ $timelineEvent->age }} {{ $timelineEvent->range_from }} {{ $timelineEvent->range_to }}
  </div>
  <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
-->
  <div class="progress-bar" role="progressbar" style="width: {{ $timelineEvent->age }}%;" aria-valuenow="{{ $timelineEvent->age }}" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="{{ $timelineEvent->age + 5 }}" aria-valuemin="0" aria-valuemax="100">
    <!--{{ $timelineEvent->timeframe }}: -->{{ $timelineEvent->age }}
  </div>
  <div class="progress-bar" role="progressbar" style="width: {{ 95 - $timelineEvent->age }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<em>Range:</em> {{ $timelineEvent->range_from }} {{ $timelineEvent->range_to }}
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: {{ $timelineEvent->range_from }}%;" aria-valuenow="{{ $timelineEvent->range_from }}" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: {{ $timelineEvent->range_to - $timelineEvent->range_from }}%;" aria-valuenow="{{ $timelineEvent->range_to }}" aria-valuemin="0" aria-valuemax="100">
    <!--{{ $timelineEvent->timeframe }}: -->{{ $timelineEvent->range_from }} to {{ $timelineEvent->range_to }}
  </div>
  <div class="progress-bar" role="progressbar" style="width: {{ 100 - ($timelineEvent->range_to-$timelineEvent->range_from) - $timelineEvent->range_from }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<hr />
