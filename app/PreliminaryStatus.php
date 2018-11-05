<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreliminaryStatus extends Model
{
    protected $fillable = ['preliminary_status_name'];
    public $timestamps = false;

}
