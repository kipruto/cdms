<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SampleTrack extends Model
{
    protected $fillable = ['patient_id', 'sample_location_id'];
    protected  $primaryKey = ['sample_id'];
    public $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
