<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index_admin() {
        return view('admin/Login');
    }

    function login_admin(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        
        if(Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('loginError' ,'Login failed');
    }

    function index_user() {
        return view('user/Login');
    }

    function login_user(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        
        if(Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/user');
        }

        return back()->with('loginError' ,'Login failed');
    }

    function logout_user() {
        Auth::logout();
        return redirect('/login/user');
    }

    function logout_admin() {
        Auth::guard('admin')->logout();
        return redirect('/login/admin');
    }
}