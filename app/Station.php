<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['station_name', 'subcounty_id'];

    public function subcounties()
    {
        return $this->belongsTo('App\Subcounty');
    }
    public function patients()
    {
        return $this->hasMany('App\Patient');
    }
}
