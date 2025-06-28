<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // login user
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $remember = $request->remember_me;

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect('');
        }

        return back()->withErrors('error', 'Invalid email or password.');
    }

    // register user
    public function register(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|alpha:ascii',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        if (!$user) {
            return back()->withErrors('error', 'Something went wrong. User not created.');
        }

        return redirect()->route('auth.login')->with('success', 'User registered. Please login.');
    }

}
