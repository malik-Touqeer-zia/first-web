<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Dashboard View
    public function dashboard() {
        return view('auth.dashboard');
    }

    // Show Registration Form
    public function showRegisterForm() {
        return view('auth.register');
    }

    // Handle Registration
    public function registersave(Request $request) {
        $register = $request->validate([
            "name" => "required|string|max:100",
            "email" => "required|string|email|unique:users",
            "password" => "required|string|confirmed"
        ]);

        $register['password'] = Hash::make($register['password']);
        User::create($register);

        return redirect('/login')->with('success', "Register successfully");
    }

    // Show Login Form
    public function login() {
        return view("Ecommerce.login");
    }

    // Handle Login
    public function matchlogin(Request $request) {
        $credentials = $request->validate([
            "email" => "required|string",
            "password" => "required|string",
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', "Login successfully");
        }

        return back()->withErrors([
            'email' => 'The provided Email/password do not match our records.',
        ]);
    }

    // Dashboard Page after login
    public function dashboards() {
        if (Auth::check()) {
           
            return view('Ecommerce.product ');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout() {
        Auth::logout();           
            return view('Ecommerce.login');
       
        }
}
