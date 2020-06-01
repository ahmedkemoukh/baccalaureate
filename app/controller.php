<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class controller extends Authenticatable
{

    protected $guard="controller";
    protected $fillable = [
        'name','prenom', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
