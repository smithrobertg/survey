<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demographics extends Model
{
    // Get the survey that owns the demographic

    public function survey()
    {
    	return $this->belongsTo('App\Survey');
    }
}
