<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    public function survey()
    {
      return $this->belongsTo('App\Survey');
    }
}
