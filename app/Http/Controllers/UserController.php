<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::with(['products'])->paginate(25);
        return view('admin.users.users')->with(['users' => $users]);
    }
}
