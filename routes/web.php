<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('login');
    return view('noLogin.body');

});
