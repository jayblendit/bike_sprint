<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    protected $guarded = [];

    public function bikegames(){
        return $this->hasMany('App\BikeGame'); // this could be hasOne, depending on if you are going to use the same distance for other games or not
    }
     
}
