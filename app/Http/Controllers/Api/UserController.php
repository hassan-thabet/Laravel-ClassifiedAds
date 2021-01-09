<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserApiResource;

class UserController extends Controller
{
    public function index(){
         return UserApiResource::collection(User::all());
    }
}
