<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
	// Get the demographics for the survey

	public function demographics ()
	{
		return $this->hasMany('App\Demographics');
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
