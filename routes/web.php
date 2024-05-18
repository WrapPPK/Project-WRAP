<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DoctorController;

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
Route::get('/loginPasien', [PasienController::class, 'index'])->name('loginPasien');
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/dashPasien', function () {return view('Pasien.DashboardPasien');});
Route::delete('/pasiens/{id}', [PasienController::class, 'destroy'])->name('pasiens.destroy');

// Route untuk menampilkan form edit
Route::get('/pasiens/{id}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');

// Route untuk mengupdate data pasien
Route::put('/pasiens/{id}', [PasienController::class, 'update'])->name('pasiens.update');


// Dokter
Route::get('/loginDokter', [DoctorController::class, 'index'])->name('loginDokter');
Route::post('/dashDok', [DoctorController::class, 'authenticate'])->name('dashDok');
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::get('/dashDokter', function () {return view('dokter.DashboardDokter');});
Route::get('/tambahPasien', function () {return view('dokter.insertPasien');});


// Admin
Route::get('/loginAdmin', [adminController::class, 'index'])->name('loginAdmin');
Route::post('/dashAdmin', [adminController::class, 'authenticate'])->name('dashAdmin');

Route::get('/dashboardadmin', function () {return view('admin.dashboardAdmin');});
Route::get('/insert', function () {return view('admin.insertAdmin');});




