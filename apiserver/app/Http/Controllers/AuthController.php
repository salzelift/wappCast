<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Show the login form
    public function showLogin()
    {
        return view('admin.login');
    }

    // Handle the login attempt
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to log the user in using web sessions
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Protects against session fixation

            return redirect()->route('admin.dashboard');
        }

        // If it fails, throw an error back to the login page
        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
