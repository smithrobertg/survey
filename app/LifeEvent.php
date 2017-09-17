<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LifeEvent extends Model
{
    //
    public function category()
    {
      return $this->belongsTo('App\EventCategory');
    }
}
