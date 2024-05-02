<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class RegisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function create()
    {
        $data = User::all();
        return view('auth.regisPasien', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'birthdate' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'doctor' => 'required'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'birthdate' => $request->input('birthdate'),
            'phone_number' => $request->input('phone_number'),
            'gender' => $request->input('gender'),
            'doctor' => $request->input('doctor'),
        ]);

        return redirect('/login');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
