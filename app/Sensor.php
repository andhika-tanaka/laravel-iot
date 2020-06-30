<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'qty',
        'category_id'
    ];
    
    public function sensorDevices(){
        return $this->hasMany('App\DeviceSensor');
    }

    public function category(){
        return $this->belongsTo('App\SensorCategory', 'category_id');
    }

    
}
