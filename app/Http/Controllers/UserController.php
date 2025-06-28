<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
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
