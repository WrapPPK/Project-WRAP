<?php

namespace App\Http\Controllers;

use App\Models\WaktuMinum;
use App\Models\Pasien; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WaktuMinumController extends Controller{

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'hari' => 'required',
            'sudah_minum' => 'required|in:1,0',
            'tanggal_minum' => 'required|date',
            'waktu_minum' => 'required|date_format:H:i',
        ]);

        // Mendapatkan ID pengguna yang sedang login
        $id = Auth::guard('pasien')->user()->id;

        // memasukkan data
        $path = '';
        $obat = new WaktuMinum();
        $obat->id = $id;
        $obat->hari= $request->input('hari');
        $obat->sudah_minum = $request->input('sudah_minum');
        $obat->tanggal_minum = $request->input('tanggal_minum');
        $obat->waktu_minum = $request->input('waktu_minum');
        if ($request->hasFile('bukti_minum')) {
            $file = $request->file('bukti_minum');
            $path = $file->store('uploads/BuktiObat', 'public'); // Simpan file ke direktori storage/app/uploads/pasiens
        }
        $obat->bukti_minum = $path;
        $obat->save();

        // Redirect ke halaman atau tindakan yang sesuai setelah penyimpanan berhasil
        return redirect()->route('dashboardPasien')->with('success', 'Data waktu minum berhasil disimpan.');
    }

    public function viewtableObat()
    {
        $userId = Auth::guard('pasien')->id();
        $pasien = Pasien::with('waktuMinum')->find($userId);

        if (!$pasien) {
            return redirect()->route('dashboardPasien')->with('error', 'Data pasien tidak ditemukan.');
        }

        $waktuMinum = $pasien->WaktuMinum;

        return view('Pasien.DashboardPasien', compact('waktuMinum'));
    
    }
}
