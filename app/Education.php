<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    public function surveys()
    {
      return $this->belongsToMany('App\Survey')->withTimestamps();
    }
}
