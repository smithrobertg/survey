<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
	// Get the demographics for the survey

	public function demographics()
	{
		return $this->hasMany('App\Demographics');
	}

	public function life_events()
	{
			return $this->belongsToMany('App\LifeEvent')->withTimestamps();
	}

	public function timeline_events()
	{
		return $this->hasMany('App\TimelineEvent');
	}

	public function education()
	{
		return $this->hasMany('App\Education');
	}
    //
    // public static function incomplete()
    // {
    // 	return static::where('finish_date', '!=', null)->get();
    // }
	//
	public function scopeIncomplete($query)
	{
		return $query->where('finish_date', null);
	}

	public function isComplete()
	{
		return $this->where('finish_date', '!=', null);
	}
}
