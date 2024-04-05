<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;

Route::get('/', [WelcomeController::class,'index']);

Route::group(['prefix' => 'user'], function(){
    Route::get('/', [userController::class, 'index']);          // Menampilkan halaman awal user
    Route::post('/list', [userController::class, 'list']);      //  menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [userController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [userController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [userController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [userController::class, 'edit']);  // menampilkan halaman form edit user 
    Route::put('/{id}', [userController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [userController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'level'], function(){
    Route::get('/', [LevelController::class, 'index']);         
    Route::post('/list', [LevelController::class, 'list']);      
    Route::get('/create', [LevelController::class, 'create']);   
    Route::post('/', [LevelController::class, 'store']);         
    Route::get('/{id}', [LevelController::class, 'show']);       
    Route::get('/{id}/edit', [LevelController::class, 'edit']); 
    Route::put('/{id}', [LevelController::class, 'update']);     
    Route::delete('/{id}', [LevelController::class, 'destroy']); 
});

Route::group(['prefix' => 'kategori'], function(){
    Route::get('/', [KategoriController::class, 'index']);         
    Route::post('/list', [KategoriController::class, 'list']);      
    Route::get('/create', [KategoriController::class, 'create']);   
    Route::post('/', [KategoriController::class, 'store']);         
    Route::get('/{id}', [KategoriController::class, 'show']);       
    Route::get('/{id}/edit', [KategoriController::class, 'edit']); 
    Route::put('/{id}', [KategoriController::class, 'update']);     
    Route::delete('/{id}', [KategoriController::class, 'destroy']); 
});

Route::group(['prefix' => 'barang'], function(){
    Route::get('/', [BarangController::class, 'index']);         
    Route::post('/list', [BarangController::class, 'list']);      
    Route::get('/create', [BarangController::class, 'create']);   
    Route::post('/', [BarangController::class, 'store']);         
    Route::get('/{id}', [BarangController::class, 'show']);       
    Route::get('/{id}/edit', [BarangController::class, 'edit']); 
    Route::put('/{id}', [BarangController::class, 'update']);     
    Route::delete('/{id}', [BarangController::class, 'destroy']); 
});

Route::group(['prefix' => 'stok'], function(){
    Route::get('/', [StokController::class, 'index']);         
    Route::post('/list', [StokController::class, 'list']);      
    Route::get('/create', [StokController::class, 'create']);   
    Route::post('/', [StokController::class, 'store']);         
    Route::get('/{id}', [StokController::class, 'show']);       
    Route::get('/{id}/edit', [StokController::class, 'edit']); 
    Route::put('/{id}', [StokController::class, 'update']);     
    Route::delete('/{id}', [StokController::class, 'destroy']); 
});

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('/', [TransaksiController::class, 'index']);         
    Route::post('/list', [TransaksiController::class, 'list']);      
    Route::get('/create', [TransaksiController::class, 'create']);   
    Route::post('/', [TransaksiController::class, 'store']);         
    Route::get('/{id}', [TransaksiController::class, 'show']);       
    Route::get('/{id}/edit', [TransaksiController::class, 'edit']); 
    Route::put('/{id}', [TransaksiController::class, 'update']);     
    Route::delete('/{id}', [TransaksiController::class, 'destroy']); 
});
