<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [userController::class, 'index']);

Route::get('/user/tambah', [userController::class, 'tambah']);

Route::post('/user/tambah_simpan', [userController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [userController::class, 'ubah']);

Route::put('/user/ubah_simpan/{id}', [userController::class, 'ubah_simpan']);

Route::get('/user/hapus/{id}', [userController::class, 'hapus']);