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
    // return view('dokter.infoPasien');

});



// Pilih Role
Route::get('/pilihRole', function () {return view('auth.pilihRole');});

// Pasien
Route::get('/loginPasien', [pasienController::class, 'index'])->name('loginPasien');
Route::post('/pasien', [pasienController::class, 'store'])->name('pasien.store');
Route::post('/dashPasien', [pasienController::class, 'authenticate'])->name('dashPasien');
Route::get('/dashboardPasien', [pasienController::class, 'dashboardPasienView'])->name('dashboardPasien');
// profile Dokter
Route::get('/profilePasien', [PasienController::class, 'showProfile'])->name('profilePasien');
// logout
Route::get('/logout', [PasienController::class, 'logout'])->name('logout');


// Dokter
Route::get('/loginDokter', [DoctorController::class, 'index'])->name('loginDokter');
Route::post('/dashDok', [DoctorController::class, 'authenticate'])->name('dashDok');
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::get('/dashboardDoctor', [DoctorController::class, 'dashboardDoctorView'])->name('dashboardDoctor');
Route::get('/tambahPasien', function () {return view('dokter.insertPasien');});
// profile Dokter
Route::get('/profileDoctor', [DoctorController::class, 'showProfile'])->name('profileDoctor');
// Route untuk menampilkan form edit
Route::get('/pasiens/{id}/edit', [pasienController::class, 'edit'])->name('pasiens.edit');
Route::get('/pasiens/{id}/info', [pasienController::class, 'info'])->name('pasiens.info');
// Route untuk mengupdate data pasien
Route::put('/pasiens/{id}', [pasienController::class, 'update'])->name('pasiens.update');
// hapus pasien
Route::delete('/pasiens/{id}', [pasienController::class, 'destroy'])->name('pasiens.destroy');




// Admin
Route::get('/loginAdmin', [adminController::class, 'index'])->name('loginAdmin');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');
Route::post('/regisAdmin', [adminController::class, 'store'])->name('regisAdmin');
Route::post('/dashAdmin', [adminController::class, 'authenticate'])->name('dashAdmin');
Route::get('/dashboardAdmin', [adminController::class, 'dashboardAdminView'])->name('dashboardAdmin');
Route::get('/insert', function () {return view('admin.insertAdmin');});
// admin delete
Route::delete('/doctor/{id}', [adminController::class, 'destroy'])->name('doctor.destroy');
// admin edit view
Route::get('/doctor/{id}/edit', [adminController::class, 'edit'])->name('doctor.edit');
Route::put('/doctor/{id}/edit', [adminController::class, 'update'])->name('doctor.update');
// logout admin
Route::get('/logout', [adminController::class, 'logout'])->name('logout');




