<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['first_name', 'last_name', 'gender', 'dob', 'contact'];
    public $timestamps = false;
    public function station()
    {
        return $this->belongsTo('App\Station');
    }

    public function incident()
    {
        return $this->hasOne('App\Incident');
    }

    public function samples()
    {
        return $this->hasMany('App\Sample');
    }
}
