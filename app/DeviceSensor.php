<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceSensor extends Model
{
    //
    protected $fillable = [
        'device_id',
        'sensor_id',
    ];

    public function device(){
        return $this->belongsTo('App\Device', 'device_id');
    }

    public function sensor(){
        return $this->belongsTo('App\Sensor', 'sensor_id');
    }

    public function deviceSensorDatas(){
        return $this->hasMany('App\DeviceSensorData');
    }
}
