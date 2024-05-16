<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    // return view('auth.regisPasien');
    // return view('dokter.DashboardDokter');
    // return view('noLogin.body');
    // return view('auth.loginDokter');
    // return view('auth.loginAdmin');
    // return view('auth.login');
    // return view('dokter.insertPasien');
    // return view('admin.dashboardAdmin');
    // return view('admin.insertAdmin');
    // return view('auth.regisAdmin');
    return view('auth.pilihRole');

});

// Pasien
Route::get('/patient', [PasienController::class, 'index'])->name('patient');

