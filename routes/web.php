<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\adminController;

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
Route::get('/loginPasien', function () {return view('auth.loginPasien');});
Route::get('/patient', [PasienController::class, 'index'])->name('patient');

// Dokter
Route::get('/loginDokter', function () {return view('auth.loginDokter');});

// Admin
Route::get('/loginAdmin', [adminController::class, 'index'])->name('loginAdmin');
Route::post('/dashboardAdmin', [adminController::class, 'authenticate'])->name('dashboardAdmin');



