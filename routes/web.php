<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Matakuliah\MatakuliahController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['guest'])->group(function(){
//     Route::get('/', [LoginController::class, 'index'])->name('/');
// });
Route::middleware('belum_login')->group(function(){
Route::get('/',[AuthController::class,'index'])->name('/');
Route::get('/daftar',[AuthController::class,'daftar'])->name('daftar');
Route::post('/register.post',[AuthController::class, 'register'])->name('register.post');
Route::post('/login',[AuthController::class,'login'])->name('login');
});

Route::middleware('sudah_login')->group(function(){
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/tambah',[HomeController::class,'tambah'])->name('tambah');
Route::post('/tambah.save',[HomeController::class,'save'])->name('save');
Route::get('/edit.data/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update.data/{id}',[HomeController::class,'update'])->name('update');
Route::get('/delete.data/{id}',[HomeController::class,'delete'])->name('delete');

//matkuliah
Route::get('/matakuliah',[MatakuliahController::class,'index'])->name('matakuliah');
Route::get('/tambah.matakuliah',[MatakuliahController::class,'tambah'])->name('tambah.matakuliah');
Route::post('/tambah.save',[MatakuliahController::class,'save'])->name('save.matakuliah');
Route::get('/edit.matakuliah/{id}',[MatakuliahController::class,'edit'])->name('edit.matakuliah');
Route::post('/update.matakuliah/{id}',[MatakuliahController::class,'update'])->name('update.matakuliah');
Route::get('/delete.matakuliah/{id}',[MatakuliahController::class,'delete'])->name('delete.matakuliah');


//kota
Route::get('/kota',[KotaController::class,'index'])->name('kota');
Route::get('/tambah.kota',[KotaController::class,'tambah'])->name('tambah.kota');
Route::post('/save.kota',[KotaController::class,'save'])->name('save.kota');
});
