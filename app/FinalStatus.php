<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalStatus extends Model
{
    protected $fillable = ['final_status_name'];
    public $timestamps = false;
}
