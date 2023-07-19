<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function index()
    {
        //welcome view
        dump(auth()->user());
        return view('welcome');
    }

    public function register()
    {
        //go to register view
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //save data from 
        $request->request->add(['username' => Str::slug($request->get('username'))]);

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

        User::create([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->route('welcome')->with('status', 'Usuario registrado');
    }

    public function read(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('alert', 'Credenciales incorrectas');
        }

        return redirect()->route('posts');
    }
}
