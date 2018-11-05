<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcounty extends Model
{
    protected $fillable = ['subcounty_name', 'number_of_stations'];

    public function stations()
    {
        return $this->hasMany('App\Station');
    }
}
