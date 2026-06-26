<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function registerform() {
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ],
        ]);

        $user = DB::transaction(function () use ($request) {
             return User::create([
                 'name' => $request->name,
                 'email' => $request->email,
                 'password' => Hash::make($request->password),
             ]);
        });

         event(new \Illuminate\Auth\Events\Registered($user));

         return redirect('/login')
         ->with('success','Account created successfully! Please sign in');
    }

    public function login(){
      return view('auth.login');
    }

}


