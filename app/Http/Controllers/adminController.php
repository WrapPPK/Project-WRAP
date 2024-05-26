<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\adminModel as admin;
use App\Models\Doctor as doctor;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.loginAdmin', [
            'title' => 'loginAdmin'
        ]);
    }

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

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin = new admin();
        $admin->nip = $request->input('inputNip');
        $admin->nama = $request->input('nama_lengkap');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));

        $admin->save();

        return redirect()->route('loginAdmin')->with('success', 'Admin account created successfully!');
    }
    public function dashboardAdminView()
    {
        $data = doctor::all();
        return view('admin.dashboardAdmin', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = doctor::findOrFail($id);
        return view('admin.editAdmin', ['data' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = doctor::findOrFail($id); // menumakan user berdasarkan ID
        $user->delete(); // Hapus user dari database
        return redirect()->route('dashboardAdmin')->with('success', 'User has been deleted successfully');
    }
}
