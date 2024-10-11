<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\productController;

Route::get('/',[productController::class,'product']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/registersave', [AuthController::class, 'registersave'])->name('registersave');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logincheck', [AuthController::class, 'matchlogin'])->name('logincheck');
Route::get('/dashboard', [AuthController::class, 'dashboards'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
