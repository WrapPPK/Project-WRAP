<?php

namespace App\Http\Controllers;


use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\RedirectResponse;

class pasienController extends Controller
{
    public function index()
    {
        return view('auth.loginPasien', [
            'title' => 'loginPasien'
        ]);
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:doctors',
        //     'password' => 'required|min:6',
        //     'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $pasien = new Pasien();
        $pasien->name = $request->input('name');
        $pasien->email = $request->input('email');
        $pasien->age = $request->input('age');
        $pasien->gender = $request->input('gender');
        $pasien->disease = $request->input('disease');
        $pasien->level = $request->input('level');
        $pasien->status = $request->input('status');
        $pasien->time_to_take_medicine = $request->input('time_to_take_medicine');
        $pasien->medication_times = $request->input('medication_times');
        $pasien->password = Hash::make($request->input('password'));

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/pasiens'), $filename);
            $pasien->photo = 'uploads/pasiens/' . $filename;
        }

        $pasien->save();

        return redirect()->route('dashboardDoctor')->with('success', 'Doctor account created successfully!');
    }

    public function authenticate(Request $request)
     {
         $credentials = $request->only('email', 'password');

         if (Auth::guard('pasien')->attempt($credentials)) {
             // Jika autentikasi berhasil, arahkan pengguna ke dashboard admin
             return redirect()->route('dashboardPasien');
         }

         // Jika autentikasi gagal, kembali ke halaman login dengan pesan kesalahan
         return redirect()->route('loginPasien')->with('error', 'Invalid email or password.');
     }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboardPasienView()
    {
        return view('Pasien.DashboardPasien', [
            'title' => 'Dashboard'
        ]);
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('dashboardDoctor')->with('success', 'Pasien berhasil dihapus');
    }


    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('dokter.updatePasien', compact('pasien'));
    }

    public function info($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('dokter.infoPasien', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);

        if ($request->password) {
            $pasien->password = Hash::make($request->password);
        }

        $pasien->name = $request->name;
        $pasien->email = $request->email;
        $pasien->age = $request->age;
        $pasien->gender = $request->gender;
        $pasien->disease = $request->disease;
        $pasien->level = $request->level;
        $pasien->status = $request->status;
        $pasien->time_to_take_medicine = $request->time_to_take_medicine;
        $pasien->medication_times = $request->medication_times;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/pasiens/'), $fileName);
            $pasien->photo = 'uploads/pasiens/' . $fileName;
        }

        $pasien->save();

        // return redirect()->route('/dashDokter')->with('success', 'Pasien berhasil dihapus');
        return redirect()->route('dashboardDoctor')->with('success', 'Doctor account created successfully!');
    }
    
    // profile pasien
    public function showProfile()
    {
        $pasien = Auth::guard('pasien')->user();
        return view('Pasien.profilePasien', compact('pasien'));
    }

    
}
