<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    function showRegister(){
        return view('authentication.register');
    }
    function showLogin(){
        return view('authentication.login');
    }

    function performRegister(Request $REQUEST){ 
        $REQUEST->validate([
            'name' => 'required|string|max:255',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $REQUEST->name,
            'email'     => $REQUEST->email,
            'password'  => Hash::make($REQUEST->password)
        ]); 
        return redirect()->route('login.form')->with('success','Registration successful!');
    }
    function performLogin(Request $REQUEST){  
    }

}
