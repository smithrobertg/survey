<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimelineEvent extends Model
{
    //
	public function survey()
	{
		return $this->belongsTo('App\Survey');
	}

	public function life_event()
	{
		return $this->belongsTo('App\LifeEvent');
	}
}
