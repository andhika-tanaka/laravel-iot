<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorCategory extends Model
{
   protected $fillable = [
       'name',
       'unit'
   ];

   public function sensors(){
       return $this->hasMany('App\Sensor');
   }
}
