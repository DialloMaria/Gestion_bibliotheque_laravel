<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogionRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // public function login()
    // {
    //     return view('auths.login');
    // }

    // public function authentification(LogionRequest $request)
    // {
    //     $credentials = $request->validated();

    //     if (Auth::attempt($credentials)) {
    //         return redirect('/admin');
    //     }
        
    //     return view('auths.login');
    // }

    public function showRegisterForm()
    {
        return view('auths.register');
    }

    public function registe(Request $request)
    {

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        // Auth::login($user);

        // return redirect('/livres/dashboard');
        return view('/auths.login');
    }
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Auth::login($user);

        // return redirect('/livres/dashboard');
        return view('/auths.login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function login(){
        return view('/auths.login');
    }

    public function LoginTraitement(LogionRequest $request){
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            return redirect()->route('livres.dash');
        }
        return view('auths.login');
    }


}

