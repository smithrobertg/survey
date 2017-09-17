<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    //
    public function life_events()
    {
      return $this->hasMany('App\LifeEvent');
    }
}
