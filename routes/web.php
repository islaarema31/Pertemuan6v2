<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Auth::routes();

Route::get('/', function () {return view('auth.login');})->name('home');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/profil/{slug}',[App\Http\Controllers\ProfilController::class,'index'])->name('profil');

Route::get('/pengalaman', [App\Http\Controllers\PengalamanController::class, 'pengalaman'])->name('pengalaman');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');