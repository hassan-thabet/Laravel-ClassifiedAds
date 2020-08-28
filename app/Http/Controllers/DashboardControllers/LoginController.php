<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(AdminLoginRequest $request){
        try {
            $remember_me = $request->has('remember_me') ? true : false;

            if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

                return redirect() -> route('admin.home');

            }
            return redirect() ->back();
        }catch (\Exception $exception){
            //return redirect()->back();
            return $exception;
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
