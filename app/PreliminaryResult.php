<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreliminaryResult extends Model
{
    protected $fillable = ['patient_id', 'preliminary_status_id'];
    protected  $primaryKey = ['sample_id'];
    public $keyType = 'string';
    public $incrementing = false;
    public  $timestamps = false;
}
