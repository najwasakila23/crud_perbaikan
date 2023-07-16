<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller 
{
    public function indexRegister()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'phone' => ['required'],
        ]);

        $input['password'] = bcrypt($input['password']);

        User::create($input);

        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login!');
    }

    public function indexLogin()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $login = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            return redirect()->intended('/table');
        }

        return back()->with('loginError', 'Login error!');
    }
}
