<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('/auths.login');
    }

    public function Authentification(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required:4'
        ]);
        if(auth()->attempt($request->only('email','password'))) {
            return view('/livres/admin');
        }

        return back()->withErrors([
            'email' => 'Email invalide'
        ])->onlyInput('email');
    }

    public function logout(){
        Auth::logout(); 
    }
}
