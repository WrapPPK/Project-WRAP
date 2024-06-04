<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Pasien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class DoctorController extends Controller
{
    public function index()
    {
        return view('auth.loginDokter', [
            'title' => 'loginDokter'
        ]);
    }

    public function dashboardDoctorView()
    {
        return view('dokter.dashboardDokter', [
            'title' => 'Dashboard'
        ]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nip' => 'required|unique:doctors',
        //     'name' => 'required',
        //     'email' => 'required|email|unique:doctors',
        //     'password' => 'required|min:6',
        //     'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $doctor = new Doctor();
        $doctor->nip = $request->input('nip');
        $doctor->name = $request->input('name');
        $doctor->email = $request->input('email');
        $doctor->password = Hash::make($request->input('password'));

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/doctors'), $filename);
            $doctor->photo = 'uploads/doctors/' . $filename;
        }

        $doctor->save();

        return redirect()->route('dashboardAdmin')->with('success', 'Doctor account created successfully!');
    }

    public function listPasienView()
    {
        // Menghitung jumlah masing-masing level
        $low = Pasien::where('level', 'Low')->count();
        $medium = Pasien::where('level', 'Medium')->count();
        $high = Pasien::where('level', 'High')->count();

        // Menghitung jumlah masing-masing status
        $active = Pasien::where('status', 'Active')->count();
        $done = Pasien::where('status', 'Done')->count();

        // Periksa nilai-nilai variabel
        dd($low, $medium, $high, $active, $done);

        $data = Pasien::all();

        return view('dokter.DashboardDokter', [
            'data' => $data,
            'low' => $low,
            'medium' => $medium,
            'high' => $high,
            'active' => $active,
            'done' => $done,
        ]);
    }

    public function authenticate(Request $request)
     {
         $credentials = $request->only('email', 'password');

         if (Auth::guard('doctor')->attempt($credentials)) {
             // Jika autentikasi berhasil, arahkan pengguna ke dashboard admin
             return redirect()->route('dashboardDoctor');
         }

         // Jika autentikasi gagal, kembali ke halaman login dengan pesan kesalahan
         return redirect()->route('loginDokter')->with('error', 'Invalid email or password.');
     }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    // profile doctor
    public function profileDoctorView()
    {
        return view('dokter.profileDokter');
    }
    public function showProfile()
    {
        $doctor = Auth::guard('doctor')->user();
        return view('dokter.profileDokter', compact('doctor'));
    }

}
