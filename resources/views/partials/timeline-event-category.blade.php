<div class="alert alert-primary border border-primary">
  <h3>{{ $category->category }}</h3>
  @each('partials.timeline-event', $timelineEvents->where('life_event.event_category_id', $category->id), 'timelineEvent')
</div>
