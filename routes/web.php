<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/admin', [AuthController::class, 'showAdminForm'])->name('admin');
Route::post('/admin', [AuthController::class, 'admin']);

Route::get('/logout', [AuthController::class,'logout'])->name('logout');
// Route::get('/register', [RegistrationController::class, 'register'])->middleware('auth')->name('register');

// Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

Route::get('/register', [RegistrationController::class, 'register'])->middleware('auth')->name('register');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');



