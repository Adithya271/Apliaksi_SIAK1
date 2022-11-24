<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaDashboardController;
use App\Http\Controllers\JurusanDashboardController;
use App\Http\Controllers\DosenDashboardController;
use App\Http\Controllers\BeritaDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::resource('dosen', DosenController::class);

Route::resource('jurusan', JurusanController::class);

Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/logout',[LoginController::class,'logout']);
Route::post('/login',[LoginController::class,'authenticate']);

Route::resource('mahasiswa', MahasiswaController::class)->middleware('auth');

Route::resource('mahasiswadashboard', MahasiswaDashboardController::class)->middleware('auth');
Route::resource('jurusandashboard', JurusanDashboardController::class)->middleware('auth');
Route::resource('dosendashboard', DosenDashboardController::class)->middleware('auth');
Route::resource('beritadashboard', BeritaDashboardController::class)->middleware('auth');

Route::get('/berita',[BeritaController::class,'index']);
Route::get('/berita/{id}',[BeritaController::class,'show']);

Route::get('/beritadashboard',[BeritaDashboardController::class,'index']);
Route::get('/beritadashboard/{id}',[BeritaDashboardController::class,'show']);
Route::get('/mahasiswadashboard',[MahasiswaDashboardController::class,'index']);
Route::get('/mahasiswadashboard/{id?}',[MahasiswaDashboardController::class,'edit']);
Route::get('/mahasiswadashboard/{id?}',[MahasiswaDashboardController::class,'destroy']);
Route::get('/jurusandashboard',[JurusanDashboardController::class,'index']);
Route::get('/jurusandashboard/{id?}',[JurusanDashboardController::class,'edit']);
Route::get('/jurusandashboard/{id?}',[JurusanDashboardController::class,'destroy']);
Route::get('/dosendashboard',[DosenDashboardController::class,'index']);
Route::get('/dosendashboard/{id?}',[DosenDashboardController::class,'edit']);
Route::get('/dosendashboard/{id?}',[DosenDashboardController::class,'destroy']);




