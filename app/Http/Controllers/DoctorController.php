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

        return redirect()->back()->with('success', 'Doctor account created successfully!');
    }

    public function listPasienView(){
        $data = Pasien::all();
        return view('dokter.DashboardDokter', ['data' => $data]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //versi tutorial video
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            // dd(Auth::check());
            return redirect()->intended('/dashDokter');
            // return redirect('/admin');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

}
