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
        // Mendapatkan ID pengguna yang sedang login
        $id = Auth::guard('pasien')->user()->id;
        $obat = new WaktuMinum();
        $obat->id = $id;
        $obat->hari= $request->input('hari');
        $obat->sudah_minum = $request->input('sudah_minum');
        $obat->tanggal_minum = $request->input('tanggal_minum');
        $obat->waktu_minum = $request->input('waktu_minum');
        if ($request->hasFile('bukti_minum')) {
            $file = $request->file('bukti_minum');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum = 'uploads/BuktiObat/' . $filename;
        }
        
        $obat->save();

        // Redirect ke halaman atau tindakan yang sesuai setelah penyimpanan berhasil
        return redirect()->route('dashboardPasien')->with('success', 'Data waktu minum berhasil disimpan.');
    }

    public function viewtableObat()
    {
        $userId = Auth::guard('pasien')->id();

        // Mengambil data waktu minum berdasarkan ID pasien yang sedang login
        $pasien = Pasien::with('waktuMinum')->find($userId);

        // Akses data waktu minum melalui relasi waktuMinum
        $waktuMinum = $pasien->waktuMinum;

        return view('waktu_minum.index', compact('waktuMinum'));
    }
}
