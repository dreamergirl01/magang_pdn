<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Matakuliah\MatakuliahController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['guest'])->group(function(){
//     Route::get('/', [LoginController::class, 'index'])->name('/');
// });

Route::get('/',[AuthController::class,'index'])->name('/');
Route::get('/daftar',[AuthController::class,'daftar'])->name('daftar');
Route::post('/register.post',[AuthController::class, 'register'])->name('register.post');
Route::post('/login',[AuthController::class,'login'])->name('login');

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
