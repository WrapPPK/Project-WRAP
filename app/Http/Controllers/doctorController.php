<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\doctorModel as doctor;

class doctorController extends Controller
{

    public function viewLoginDoctor()
    {
        return view('auth.loginDokter', [
            'title' => 'Login'
        ]);
    }

     // fungsi login admin
     public function authenticate(Request $request)
     {
         $credentials = $request->only('email', 'password');
 
         if (Auth::guard('doctor')->attempt($credentials)) {
             // Jika autentikasi berhasil, arahkan pengguna ke dashboard admin
             return redirect()->route('dashboardDoctor');
         }
 
         // Jika autentikasi gagal, kembali ke halaman login dengan pesan kesalahan
         return redirect()->route('loginDoctor')->with('error', 'Invalid email or password.');
     }

     public function dashboardDoctorView()
    {
        return view('dokter.dashboardDokter', [
            'title' => 'Dashboard'
        ]);
    }
     
}
