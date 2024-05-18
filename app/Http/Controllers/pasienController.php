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

        return redirect()->back()->with('success', 'Doctor account created successfully!');
    }
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('/dashDokter')->with('success', 'Pasien berhasil dihapus');
    }


    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('dokter.updatePasien', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:pasiens,email,' . $id,
        //     'password' => 'nullable|string|min:8|confirmed',
        //     'age' => 'required|integer',
        //     'gender' => 'required|in:Male,Female',
        //     'disease' => 'required|string|max:255',
        //     'time_to_take_medicine' => 'required|integer',
        //     'medication_times' => 'required|string',
        //     'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $pasien = Pasien::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('photos', 'public');
            $pasien->photo = $photo;
        }

        if ($request->password) {
            $pasien->password = Hash::make($request->password);
        }

        $pasien->name = $request->name;
        $pasien->email = $request->email;
        $pasien->age = $request->age;
        $pasien->gender = $request->gender;
        $pasien->disease = $request->disease;
        $pasien->status = $request->status;
        $pasien->time_to_take_medicine = $request->time_to_take_medicine;
        $pasien->medication_times = $request->medication_times;

        $pasien->save();

        // return redirect()->route('/dashDokter')->with('success', 'Pasien berhasil dihapus');
        return redirect()->back()->with('success', 'Doctor account created successfully!');
    }
}
