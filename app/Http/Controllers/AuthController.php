<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'birthdate' => 'required|date',
            'phone_number' => 'required|string',
            'gender' => 'required|in:male,female,other',
            'confirm_password' => 'required|string',
            'doctor' => 'required|in:Heru Ikhsan Maulana Sp.p,David Gholi Rahmadana Sp.p'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'password' => bcrypt($validatedData['password']),
            'birthdate' => $validatedData['birthdate'],
            'phone_number' => $validatedData['phone_number'],
            'gender' => $validatedData['gender'],
            'confirm_password' => $validatedData['confirm_password'],
            'doctor' => $validatedData['doctor']
        ]);

        Auth::login($user);

        return redirect('/loginpage');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect()->intended('/dashboard');
        }

        // Jika gagal login
        return back()->withErrors(['name' => 'Invalid credentials']);
    }
}
