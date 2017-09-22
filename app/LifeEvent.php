<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LifeEvent extends Model
{
    // Event Category relationship
    public function category()
    {
      return $this->belongsTo('App\EventCategory');
    }

    public function surveys()
    {
      return $this->belongsToMany('App\Survey')->withTimestamps();
    }

	public function timeline_events()
	{
		return $this->hasMany('App\TimelineEvent');
	}
}
