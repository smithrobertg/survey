<h6>
  {{ $timelineEvent->life_event->event_category_id }}:
  {{ $timelineEvent->life_event->event }}
  ({{ $timelineEvent->timeframe }}: {{ $timelineEvent->age }} {{ $timelineEvent->year }} {{ $timelineEvent->range_to }} {{ $timelineEvent->range_from }})
</h6>
<div class="progress">
  <!--
  <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
    {{ $timelineEvent->timeframe }}: {{ $timelineEvent->age }} {{ $timelineEvent->year }} {{ $timelineEvent->range_to }} {{ $timelineEvent->range_from }}
  </div>
  <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
-->
  <div class="progress-bar" role="progressbar" style="width: {{ $timelineEvent->age }}%;" aria-valuenow="{{ $timelineEvent->age }}" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="{{ $timelineEvent->age + 10 }}" aria-valuemin="0" aria-valuemax="100">
    {{ $timelineEvent->timeframe }}: {{ $timelineEvent->age }} {{ $timelineEvent->year }} {{ $timelineEvent->range_to }} {{ $timelineEvent->range_from }}
  </div>
  <div class="progress-bar" role="progressbar" style="width: {{ 90 - $timelineEvent->age }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<hr />
