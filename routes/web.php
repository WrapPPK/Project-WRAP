<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisController;

Route::get('/', function () {
    // return view('auth.regisPasien');
    // return view('dokter.dashboardDokterListPasien');
    return view('noLogin.body');
    // return view('auth.login');
    //return view('dokter.dasboardDokterApproved');

});

// Route::get('/loginpage', function () {
//     return view('auth.login');
// });

Route::get('/regis', [RegisController::class, 'create'])->name('regis');
Route::post('/register', [RegisController::class, 'store'])->name('register');

Route::get('/dashboard', function () {
    return view('dokter.dasboardDokterApproved');
});

// login system
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);
