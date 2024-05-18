<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\adminModel as admin;
use App\Models\doctorModel as doctor;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // menampilkan view register admin
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    // Fungsi menampahkan regis admin
    public function registerAdmin(Request $request)
    {

        $admin = new admin();
        $admin->nip = $request->input('inputNip');
        $admin->nama = $request->input('nama_lengkap');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));

        $admin->save();

        return redirect()->route('loginAdmin')->with('success', 'Admin account created successfully!');
    }


    // Menampilkan view login admin
    public function index()
    {
        return view('auth.loginAdmin', [
            'title' => 'Login'
        ]);
    }

    // fungsi login admin
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan pengguna ke dashboard admin
            return redirect()->route('dashboardAdmin');
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan kesalahan
        return redirect()->route('loginAdmin')->with('error', 'Invalid email or password.');
    }

    // logout
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('loginAdmin');
    }


    // menampilkan view admin
    public function dashboardAdminView()
    {
        $data = doctor::all();
        return view('admin.dashboardAdmin', ['data' => $data]);
    }




    // tambah dokter pada admin

    // view tambah doctor di admin
    public function tambahDoctorView()
    {
        return view('admin.insertAdmin', [
            'title' => 'insertAdmin'
        ]);
    }    

    // fungsi tambah doctor di admin
    public function tambahDoctor(Request $request)
    {
        $doctor = new doctor();
        $doctor->nip = $request->input('nip_doctor');
        $doctor->name = $request->input('Nama_doctor');
        $doctor->email = $request->input('Email_doctor');
        $doctor->password = Hash::make($request->input('Password_doctor'));
        // Menyimpan file yang diupload
        if ($request->hasFile('uploadFoto')) {
            $file = $request->file('uploadFoto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $doctor->uploadFoto = 'uploads/' . $fileName;
        }

        $doctor->save();

        return redirect()->route('dashboardAdmin')->with('success', 'doctor account created successfully!');
    }


    // menghapus doctor dari table dengan menggunakan id
    public function destroy($id)
    {
        $user = doctor::findOrFail($id); // menumakan user berdasarkan ID
        $user->delete(); // Hapus user dari database
        return redirect()->route('dashboardAdmin')->with('success', 'User has been deleted successfully');
    }


    // menampilkan halaman edit sesuai id
    public function editview($id)
    {
        $doctor = doctor::findOrFail($id); 
        return view('admin.editAdmin', ['data' => $doctor]);
    }

    // Fungsi update dari halaman edit
    public function update(Request $request)
    {
        // mencar data dokter dengan ID
        $doctor = doctor::findOrFail($request->id);

        // Update data dokter
        $doctor->nip = $request->NIP;
        $doctor->name = $request->Name;
        $doctor->email = $request->Email;
        $doctor->password = Hash::make($request->Password);
        if ($request->hasFile('uploadFoto')) {
            $file = $request->file('uploadFoto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $doctor->uploadFoto = 'uploads/' . $fileName;
        }

        // UPDATE
        $doctor->save();

        //MENGALIHKAN KE DASHBOARD
        return redirect()->route('dashboardAdmin')->with('success', 'Doctor account updated successfully!');
    }
}
