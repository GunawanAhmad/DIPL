<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index_admin() {
        return view('admin/Register');
    }

    function register_admin(Request $request) {
        $validatedData =  $request->validate([
            'email' => 'required|email:dns|unique:admins',
            'nama' => 'required',
            'password' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        Admin::create($validatedData);
        return redirect('/login/admin');
    }

    function index_user() {
        return view('user/Register');
    }

    function register_user(Request $request) {
        $validatedData =  $request->validate([
            'email' => 'required|email:dns|unique:users',
            'nama' => 'required',
            'password' => 'required',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['saldo'] = 100000000;
        User::create($validatedData);
        return redirect('/login/user');
    }
}