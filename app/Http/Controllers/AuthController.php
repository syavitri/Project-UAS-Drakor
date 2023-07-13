<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedData)) {
            if (auth()->user()->role === 'admin') {
                return redirect('/administrator')->with('success', 'Login successfully as admin');
            } else {
                return redirect('/')->with('success', 'Login successfully');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function signup(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
           
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'user',
            ]
        );

        return redirect('/')->with('success', 'Registration successful. Please login.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logout successful');
    }
}
