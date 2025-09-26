<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;

Route::get('/pegawai',[PegawaiController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);
