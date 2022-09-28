<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (auth()->guard('web')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('Dashbord');
        } else {
            return redirect()->route('admin.login');

        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
        }
}
 //if(auth()->guard('web')->attempt(['email'=>$request->email]));
