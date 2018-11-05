<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SampleLocation extends Model
{
    protected $fillable = ['sample_location_name'];
    public $timestamps = false;
}
