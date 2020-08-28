<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'photo_url' ,
        'mobile', 'password' ,
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


}
