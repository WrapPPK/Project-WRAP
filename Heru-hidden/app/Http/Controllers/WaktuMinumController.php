<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

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

        // Hari 1
        // jam 1
        $obat->hari1= $request->input('hari1');
        $obat->tanggal_minum1 = $request->input('tanggal_minum1');
        $obat->sudah_minum1 = $request->input('sudah_minum1');
        $obat->waktu_minum1 = $request->input('waktu_minum1');
        if ($request->hasFile('bukti_minum1')) {
            $file = $request->file('bukti_minum1');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum1 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum2 = $request->input('sudah_minum2');
        $obat->waktu_minum2 = $request->input('waktu_minum2');
        if ($request->hasFile('bukti_minum2')) {
            $file = $request->file('bukti_minum2');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum2 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum3 = $request->input('sudah_minum3');
        $obat->waktu_minum3 = $request->input('waktu_minum3');
        if ($request->hasFile('bukti_minum3')) {
            $file = $request->file('bukti_minum3');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum3 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 2
        // jam 1
        $obat->hari2= $request->input('hari2');
        $obat->tanggal_minum2 = $request->input('tanggal_minum2');
        $obat->sudah_minum4 = $request->input('sudah_minum4');
        $obat->waktu_minum4 = $request->input('waktu_minum4');
        if ($request->hasFile('bukti_minum4')) {
            $file = $request->file('bukti_minum4');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum4 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum5 = $request->input('sudah_minum5');
        $obat->waktu_minum5 = $request->input('waktu_minum5');
        if ($request->hasFile('bukti_minum5')) {
            $file = $request->file('bukti_minum5');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum5 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum6 = $request->input('sudah_minum6');
        $obat->waktu_minum6 = $request->input('waktu_minum6');
        if ($request->hasFile('bukti_minum6')) {
            $file = $request->file('bukti_minum6');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum6 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 3
        // jam 1
        $obat->hari3= $request->input('hari3');
        $obat->tanggal_minum3 = $request->input('tanggal_minum3');
        $obat->sudah_minum7 = $request->input('sudah_minum7');
        $obat->waktu_minum7 = $request->input('waktu_minum7');
        if ($request->hasFile('bukti_minum7')) {
            $file = $request->file('bukti_minum7');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum7 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum8 = $request->input('sudah_minum8');
        $obat->waktu_minum8 = $request->input('waktu_minum8');
        if ($request->hasFile('bukti_minum8')) {
            $file = $request->file('bukti_minum8');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum8 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum9 = $request->input('sudah_minum9');
        $obat->waktu_minum9 = $request->input('waktu_minum9');
        if ($request->hasFile('bukti_minum9')) {
            $file = $request->file('bukti_minum9');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum9 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 4
        // jam 1
        $obat->hari4= $request->input('hari4');
        $obat->tanggal_minum4 = $request->input('tanggal_minum4');
        $obat->sudah_minum10 = $request->input('sudah_minum10');
        $obat->waktu_minum10 = $request->input('waktu_minum10');
        if ($request->hasFile('bukti_minum10')) {
            $file = $request->file('bukti_minum10');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum10 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum11 = $request->input('sudah_minum11');
        $obat->waktu_minum11 = $request->input('waktu_minum11');
        if ($request->hasFile('bukti_minum11')) {
            $file = $request->file('bukti_minum11');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum11 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum12 = $request->input('sudah_minum12');
        $obat->waktu_minum12 = $request->input('waktu_minum12');
        if ($request->hasFile('bukti_minum12')) {
            $file = $request->file('bukti_minum12');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum12 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 5
        // jam 1
        $obat->hari5= $request->input('hari5');
        $obat->tanggal_minum5 = $request->input('tanggal_minum5');
        $obat->sudah_minum13 = $request->input('sudah_minum13');
        $obat->waktu_minum13 = $request->input('waktu_minum13');
        if ($request->hasFile('bukti_minum13')) {
            $file = $request->file('bukti_minum13');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum13 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum14 = $request->input('sudah_minum14');
        $obat->waktu_minum14 = $request->input('waktu_minum14');
        if ($request->hasFile('bukti_minum14')) {
            $file = $request->file('bukti_minum14');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum14 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum15 = $request->input('sudah_minum15');
        $obat->waktu_minum15 = $request->input('waktu_minum15');
        if ($request->hasFile('bukti_minum15')) {
            $file = $request->file('bukti_minum15');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum15 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 6
        // jam 1
        $obat->hari6= $request->input('hari6');
        $obat->tanggal_minum6 = $request->input('tanggal_minum6');
        $obat->sudah_minum16 = $request->input('sudah_minum16');
        $obat->waktu_minum16 = $request->input('waktu_minum16');
        if ($request->hasFile('bukti_minum16')) {
            $file = $request->file('bukti_minum16');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum16 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum17 = $request->input('sudah_minum17');
        $obat->waktu_minum17 = $request->input('waktu_minum17');
        if ($request->hasFile('bukti_minum17')) {
            $file = $request->file('bukti_minum17');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum17 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum18 = $request->input('sudah_minum18');
        $obat->waktu_minum18 = $request->input('waktu_minum18');
        if ($request->hasFile('bukti_minum18')) {
            $file = $request->file('bukti_minum18');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum18 = 'uploads/BuktiObat/' . $filename;
        }


        // Hari 7
        // jam 1
        $obat->hari7= $request->input('hari7');
        $obat->tanggal_minum7 = $request->input('tanggal_minum7');
        $obat->sudah_minum19 = $request->input('sudah_minum19');
        $obat->waktu_minum19 = $request->input('waktu_minum19');
        if ($request->hasFile('bukti_minum19')) {
            $file = $request->file('bukti_minum19');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum19 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum20 = $request->input('sudah_minum20');
        $obat->waktu_minum20 = $request->input('waktu_minum20');
        if ($request->hasFile('bukti_minum20')) {
            $file = $request->file('bukti_minum20');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum20 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum21 = $request->input('sudah_minum21');
        $obat->waktu_minum21 = $request->input('waktu_minum21');
        if ($request->hasFile('bukti_minum21')) {
            $file = $request->file('bukti_minum21');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum21 = 'uploads/BuktiObat/' . $filename;
        }



        
        $obat->save();

        // Redirect ke halaman atau tindakan yang sesuai setelah penyimpanan berhasil
        return redirect()->route('dashboardPasien')->with('success', 'Data waktu minum berhasil disimpan.');
    }


    public function update(Request $request, $id)
    {
        // Mendapatkan ID pengguna yang sedang login
        $obat = WaktuMinum::findOrFail($id);

        // Hari 1
        // jam 1
        $obat->hari1 = $request->input('hari1', $obat->hari1);
        $obat->tanggal_minum1 = $request->input('tanggal_minum1', $obat->tanggal_minum1);
        $obat->sudah_minum1 = $request->input('sudah_minum1', $obat->sudah_minum1);
        $obat->waktu_minum1 = $request->input('waktu_minum1', $obat->waktu_minum1);
        if ($request->hasFile('bukti_minum1')) {
            $file = $request->file('bukti_minum1');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum1 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum2 = $request->input('sudah_minum2', $obat->sudah_minum2);
        $obat->waktu_minum2 = $request->input('waktu_minum2', $obat->waktu_minum2);
        if ($request->hasFile('bukti_minum2')) {
            $file = $request->file('bukti_minum2');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum2 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum3 = $request->input('sudah_minum3', $obat->sudah_minum3);
        $obat->waktu_minum3 = $request->input('waktu_minum3', $obat->waktu_minum3);
        if ($request->hasFile('bukti_minum3')) {
            $file = $request->file('bukti_minum3');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum3 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 2
        // jam 1
        $obat->hari2= $request->input('hari2', $obat->hari2);
        $obat->tanggal_minum2 = $request->input('tanggal_minum2', $obat->tanggal_minum2);
        $obat->sudah_minum4 = $request->input('sudah_minum4', $obat->sudah_minum4);
        $obat->waktu_minum4 = $request->input('waktu_minum4', $obat->waktu_minum4);
        if ($request->hasFile('bukti_minum4')) {
            $file = $request->file('bukti_minum4');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum4 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum5 = $request->input('sudah_minum5', $obat->sudah_minum5);
        $obat->waktu_minum5 = $request->input('waktu_minum5', $obat->waktu_minum5);
        if ($request->hasFile('bukti_minum5')) {
            $file = $request->file('bukti_minum5');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum5 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum6 = $request->input('sudah_minum6', $obat->sudah_minum6);
        $obat->waktu_minum6 = $request->input('waktu_minum6', $obat->waktu_minum6);
        if ($request->hasFile('bukti_minum6')) {
            $file = $request->file('bukti_minum6');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum6 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 3
        // jam 1
        $obat->hari3= $request->input('hari3', $obat->hari3);
        $obat->tanggal_minum3 = $request->input('tanggal_minum3', $obat->tanggal_minum3);
        $obat->sudah_minum7 = $request->input('sudah_minum7', $obat->sudah_minum7);
        $obat->waktu_minum7 = $request->input('waktu_minum7', $obat->waktu_minum7);
        if ($request->hasFile('bukti_minum7')) {
            $file = $request->file('bukti_minum7');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum7 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum8 = $request->input('sudah_minum8', $obat->sudah_minum8);
        $obat->waktu_minum8 = $request->input('waktu_minum8', $obat->waktu_minum8);
        if ($request->hasFile('bukti_minum8')) {
            $file = $request->file('bukti_minum8');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum8 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum9 = $request->input('sudah_minum9', $obat->sudah_minum9);
        $obat->waktu_minum9 = $request->input('waktu_minum9', $obat->waktu_minum9);
        if ($request->hasFile('bukti_minum9')) {
            $file = $request->file('bukti_minum9');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum9 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 4
        // jam 1
        $obat->hari4= $request->input('hari4', $obat->hari4);
        $obat->tanggal_minum4 = $request->input('tanggal_minum4', $obat->tanggal_minum4 );
        $obat->sudah_minum10 = $request->input('sudah_minum10', $obat->sudah_minum10);
        $obat->waktu_minum10 = $request->input('waktu_minum10', $obat->waktu_minum10);
        if ($request->hasFile('bukti_minum10')) {
            $file = $request->file('bukti_minum10');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum10 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum11 = $request->input('sudah_minum11', $obat->sudah_minum11);
        $obat->waktu_minum11 = $request->input('waktu_minum11', $obat->waktu_minum11);
        if ($request->hasFile('bukti_minum11')) {
            $file = $request->file('bukti_minum11');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum11 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum12 = $request->input('sudah_minum12', $obat->sudah_minum12);
        $obat->waktu_minum12 = $request->input('waktu_minum12', $obat->waktu_minum12);
        if ($request->hasFile('bukti_minum12')) {
            $file = $request->file('bukti_minum12');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum12 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 5
        // jam 1
        $obat->hari5= $request->input('hari5', $obat->hari5);
        $obat->tanggal_minum5 = $request->input('tanggal_minum5', $obat->tanggal_minum5);
        $obat->sudah_minum13 = $request->input('sudah_minum13', $obat->sudah_minum13);
        $obat->waktu_minum13 = $request->input('waktu_minum13', $obat->waktu_minum13);
        if ($request->hasFile('bukti_minum13')) {
            $file = $request->file('bukti_minum13');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum13 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum14 = $request->input('sudah_minum14', $obat->sudah_minum14);
        $obat->waktu_minum14 = $request->input('waktu_minum14', $obat->waktu_minum14);
        if ($request->hasFile('bukti_minum14')) {
            $file = $request->file('bukti_minum14');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum14 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum15 = $request->input('sudah_minum15', $obat->sudah_minum15);
        $obat->waktu_minum15 = $request->input('waktu_minum15', $obat->waktu_minum15);
        if ($request->hasFile('bukti_minum15')) {
            $file = $request->file('bukti_minum15');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum15 = 'uploads/BuktiObat/' . $filename;
        }



        // Hari 6
        // jam 1
        $obat->hari6= $request->input('hari6', $obat->hari6);
        $obat->tanggal_minum6 = $request->input('tanggal_minum6', $obat->tanggal_minum6);
        $obat->sudah_minum16 = $request->input('sudah_minum16', $obat->sudah_minum16);
        $obat->waktu_minum16 = $request->input('waktu_minum16', $obat->waktu_minum16);
        if ($request->hasFile('bukti_minum16')) {
            $file = $request->file('bukti_minum16');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum16 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum17 = $request->input('sudah_minum17', $obat->sudah_minum17);
        $obat->waktu_minum17 = $request->input('waktu_minum17', $obat->waktu_minum17);
        if ($request->hasFile('bukti_minum17')) {
            $file = $request->file('bukti_minum17');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum17 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum18 = $request->input('sudah_minum18', $obat->sudah_minum18);
        $obat->waktu_minum18 = $request->input('waktu_minum18', $obat->waktu_minum18);
        if ($request->hasFile('bukti_minum18')) {
            $file = $request->file('bukti_minum18');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum18 = 'uploads/BuktiObat/' . $filename;
        }


        // Hari 7
        // jam 1
        $obat->hari7= $request->input('hari7', $obat->hari7);
        $obat->tanggal_minum7 = $request->input('tanggal_minum7', $obat->tanggal_minum7);
        $obat->sudah_minum19 = $request->input('sudah_minum19', $obat->sudah_minum19);
        $obat->waktu_minum19 = $request->input('waktu_minum19', $obat->waktu_minum19);
        if ($request->hasFile('bukti_minum19')) {
            $file = $request->file('bukti_minum19');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum19 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 2
        $obat->sudah_minum20 = $request->input('sudah_minum20', $obat->sudah_minum20);
        $obat->waktu_minum20 = $request->input('waktu_minum20', $obat->waktu_minum20);
        if ($request->hasFile('bukti_minum20')) {
            $file = $request->file('bukti_minum20');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum20 = 'uploads/BuktiObat/' . $filename;
        }

        // jam 3
        $obat->sudah_minum21 = $request->input('sudah_minum21', $obat->sudah_minum21);
        $obat->waktu_minum21 = $request->input('waktu_minum21', $obat->waktu_minum21);
        if ($request->hasFile('bukti_minum21')) {
            $file = $request->file('bukti_minum21');
            $filename = time() . '' . $file->getClientOriginalName();
            $file->move(public_path('uploads/BuktiObat'), $filename);
            $obat->bukti_minum21 = 'uploads/BuktiObat/' . $filename;
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


    public function downloadJson($id)
    {
        $data = DB::table('waktu_minum')->where('id', $id)->first();

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan.'], 404);
        }

        $response = [
            'kepatuhan' => [
                'sudah_minum1' => $data->sudah_minum1 ? 'Sudah' : 'Belum',
                'sudah_minum2' => $data->sudah_minum2 ? 'Sudah' : 'Belum',
                'sudah_minum3' => $data->sudah_minum3 ? 'Sudah' : 'Belum',
                'sudah_minum4' => $data->sudah_minum4 ? 'Sudah' : 'Belum',
                'sudah_minum5' => $data->sudah_minum5 ? 'Sudah' : 'Belum',
                'sudah_minum6' => $data->sudah_minum6 ? 'Sudah' : 'Belum',
                'sudah_minum7' => $data->sudah_minum7 ? 'Sudah' : 'Belum',
                'sudah_minum8' => $data->sudah_minum8 ? 'Sudah' : 'Belum',
                'sudah_minum9' => $data->sudah_minum9 ? 'Sudah' : 'Belum',
                'sudah_minum10' => $data->sudah_minum10 ? 'Sudah' : 'Belum',
                'sudah_minum11' => $data->sudah_minum11 ? 'Sudah' : 'Belum',
                'sudah_minum12' => $data->sudah_minum12 ? 'Sudah' : 'Belum',
                'sudah_minum13' => $data->sudah_minum13 ? 'Sudah' : 'Belum',
                'sudah_minum14' => $data->sudah_minum14 ? 'Sudah' : 'Belum',
                'sudah_minum15' => $data->sudah_minum15 ? 'Sudah' : 'Belum',
                'sudah_minum16' => $data->sudah_minum16 ? 'Sudah' : 'Belum',
                'sudah_minum17' => $data->sudah_minum17 ? 'Sudah' : 'Belum',
                'sudah_minum18' => $data->sudah_minum18 ? 'Sudah' : 'Belum',
                'sudah_minum19' => $data->sudah_minum19 ? 'Sudah' : 'Belum',
                'sudah_minum20' => $data->sudah_minum20 ? 'Sudah' : 'Belum',
                'sudah_minum21' => $data->sudah_minum21 ? 'Sudah' : 'Belum',
            ],
        ];
    // Set header untuk mengunduh file JSON
    $headers = [
        'Content-Type' => 'application/json',
        'Content-Disposition' => 'attachment; filename="waktu_minum_' . $id . '.json"',
    ];

    return Response::make(json_encode($response, JSON_PRETTY_PRINT), 200, $headers);
        // return response()->json($response);
    }
}
