<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'status',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function deviceSensors(){
        return $this->hasMany('App\DeviceSensor');
    }
}
