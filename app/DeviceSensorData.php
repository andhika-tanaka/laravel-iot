<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceSensorData extends Model
{
    //
    protected $fillable = [
        'device_sensor_id',
        'result'
    ];

    public function deviceSensor(){
        return $this->belongsTo('App\DeviceSensor', 'device_sensor_id');
    }
}
