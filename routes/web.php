<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    // return view('auth.regisPasien');
    // return view('dokter.DashboardDokter');
    return view('noLogin.body');
    // return view('auth.loginDokter');
    // return view('auth.loginAdmin');
    // return view('auth.login');
    // return view('dokter.insertPasien');
    // return view('admin.dashboardAdmin');
    // return view('admin.insertAdmin');
    // return view('auth.regisAdmin');
    // return view('auth.pilihRole');

});



// Pilih Role
Route::get('/pilihRole', function () {return view('auth.pilihRole');});

// Pasien
Route::get('/loginPasien', [PasienController::class, 'loginview'])->name('loginPasien');
Route::get('/patient', [PasienController::class, 'index'])->name('patient');

