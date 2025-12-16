<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HafalanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Models\Hafalan;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\HttpCache\Store;

#register
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register/submit', [AuthController::class, 'submitRegister']); 

#login
Route::get('/', [AuthController::class, 'showLogin']);
Route::post('/submit', [AuthController::class, 'submitLogin']); 

Route::get('/home', function () {
    return view('home', ['title' => 'Dashboard']);
});

#siswas crud
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::put('/siswa/{siswa}', [SiswaController::class, 'update']);
Route::get('/siswa/{siswa}/rapor', [SiswaController::class, 'show']);
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit']);
Route::delete('/siswa/{siswa}', [SiswaController::class, 'delete']);

#hafalan crud
Route::get('/hafalan', [HafalanController::class, 'index']);
Route::post('/hafalan', [HafalanController::class, 'store']);
Route::get('/hafalan/create', [HafalanController::class, 'create']);
Route::put('/hafalan/{hafalan}', [HafalanController::class, 'update']);
Route::get('/hafalan/{hafalan}/edit', [HafalanController::class, 'edit']);
Route::delete('/hafalan/{hafalan}', [HafalanController::class, 'delete']);



Route::get('/raport', function () {
    return view('raport', ['title' => 'Penilaian & Rapor']);
});


Route::get('/profile', [ProfileController::class, 'index']);


