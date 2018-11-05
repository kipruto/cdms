<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = ['sample_id', 'patient_id'];
    protected  $primaryKey = ['sample_id'];
    public $keyType = 'string';
    public $incrementing = false;

    public function patient()
    {
        $this->belongsTo('App\Patient');
    }
}
