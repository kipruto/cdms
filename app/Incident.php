<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = ['patient_id', 'sample_id', 'preliminary_result_id', 'sample_location_id', 'final_result_id', 'user_id', 'station_id'];

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
