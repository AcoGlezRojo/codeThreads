<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{


    public function register()
    {
        //go to register view
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //save data from 
        $this->validate($request, [
            'name' => 'required',
            'username' => ['required', 'unique:users', 'max:20'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised()],

        ]);

        dd($request);
    }
}
