<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, EntrustUserTrait;

    protected $fillable = [
        'first_name', 'last_name', 'gender','dob','email_address','password', 'password_confirmation'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
