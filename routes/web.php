<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\WaktuMinumController;
use App\Http\Controllers\KepatuhanController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;

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

Route::get('/regisAdmin', function () {
    return view('auth.regisAdmin');
});

Route::post('/upload-csv', [UploadController::class, 'uploadCsv'])->name('uploadCsv');

// Rute untuk menampilkan info pasien (yang sudah ada)
Route::get('/info-pasien/{id}', [pasienController::class, 'info'])->name('infoPasien');
// Rute baru untuk menampilkan halaman kepatuhan pasien
Route::get('/kepatuhan/{id}', [KepatuhanController::class, 'show'])->name('showKepatuhan');

// web.php
Route::get('/kepatuhan/{id}', [KepatuhanController::class, 'show']);
Route::get('/download-excel/{id}', [KepatuhanController::class, 'downloadExcel'])->name('downloadExcel');



// Pilih Role
Route::get('/pilihRole', function () {return view('auth.pilihRole');});

// Pasien
Route::get('/loginPasien', [pasienController::class, 'index'])->name('loginPasien');
Route::post('/pasien', [pasienController::class, 'store'])->name('pasien.store');
Route::post('/dashPasien', [pasienController::class, 'authenticate'])->name('dashPasien');
Route::get('/dashboardPasien', [pasienController::class, 'dashboardPasienView'])->name('dashboardPasien');
// table pasien
Route::get('/waktu-minum', [WaktuMinumController::class, 'viewtableObat'])->name('waktuMinum.viewtableObat');
// profile pasien
Route::get('/profilePasien', [PasienController::class, 'showProfile'])->name('profilePasien');
// Modal tambah control obat
Route::post('/waktu-minum', [WaktuMinumController::class, 'store'])->name('waktu_minum.store');
Route::get('/pasiens/{id}/tambahData1', [PasienController::class, 'viewedit1'])->name('pasiens.edit1');
Route::get('/pasiens/{id}/tambahData2', [PasienController::class, 'viewedit2'])->name('pasiens.edit2');
Route::put('/pasiens/{id}/tambah1', [PasienController::class, 'tambah1'])->name('pasiens.tambah1');
Route::put('/pasiens/{id}/tambah2', [PasienController::class, 'tambah2'])->name('pasiens.tambah2');
Route::get('/pasiens/{id}/infoPasien', [pasienController::class, 'infoForPasien'])->name('pasiens.pengingat');
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


// forgot pass

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');




