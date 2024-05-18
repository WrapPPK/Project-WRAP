<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\doctorController;

Route::get('/', function () {
    // return view('auth.regisPasien');
    // return view('dokter.DashboardDokter');
    return view('noLogin.body');
    // return view('auth.regisAdmin');
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

// Admin
Route::post('/fungsiRegisAdmin', [adminController::class, 'registerAdmin'])->name('fungsiRegisAdmin');
Route::get('/loginAdmin', [adminController::class, 'index'])->name('loginAdmin');
Route::post('/authAdmin', [adminController::class, 'authenticate'])->name('authAdmin');
Route::get('/dashboardAdmin', [adminController::class, 'dashboardAdminView'])->name('dashboardAdmin');
// admin insert dan show
Route::get('/insertDoctorView', [adminController::class, 'tambahDoctorView'])->name('insertDoctorView');
Route::post('/fungsiInsertDoctor', [adminController::class, 'tambahDoctor'])->name('fungsiInsertDoctor');
// admin delete
Route::delete('/doctor/{id}', [adminController::class, 'destroy'])->name('doctor.destroy');
// admin edit view
Route::get('/doctor/{id}/edit', [adminController::class, 'editview'])->name('doctor.edit');
Route::put('/doctor/{id}/edit', [adminController::class, 'update'])->name('doctor.update');



// Logout
Route::get('/logout', [adminController::class, 'logout'])->name('logout');


// Pasien
// Route::get('/loginPasien', function () {return view('auth.loginPasien');});
// Route::get('/dashboard', function () {
//     return view('admin.adminDashboard');
// })->middleware('auth');

// Dokter
Route::get('/loginDoctor', [doctorController::class, 'viewLoginDoctor'])->name('loginDoctor');
Route::post('/authDoctor', [doctorController::class, 'authenticate'])->name('authDoctor');
Route::get('/dashboardDoctor', [doctorController::class, 'dashboardDoctorView'])->name('dashboardDoctor');


// Route::get('/dashboardadmin', function () {return view('admin.dashboardAdmin');});
// Route::get('/insertadmin', function () {return view('admin.insertAdmin');});
// admin sidebar



