<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalResult extends Model
{
    protected $fillable = ['patient_id', 'final_status_id'];
    protected  $primaryKey = ['sample_id'];
    public $keyType = 'string';
    public $incrementing = false;
}
