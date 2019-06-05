<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BikeGame extends Model
{
  protected $guarded = [];

   public function distance(){
    return $this->belongsTo('App\Distance', 'distance_id');   
   }
    
}
