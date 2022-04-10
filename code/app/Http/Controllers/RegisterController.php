<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index() {
        return view('Register');
    }

    function register(Request $request) {
        $validatedData =  $request->validate([
            'email' => 'required|email:dns|unique:users',
            'nama' => 'required',
            'password' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create(array_merge($validatedData, ['role' => 'admin']));
        return redirect('/login');
    }
}