<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Middleware\AdminMiddleware;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/admin', [AuthController::class, 'showAdminForm'])->name('admin');
Route::post('/admin', [AuthController::class, 'admin']);

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

// Route::get('/register', [RegistrationController::class, 'register'])->middleware('auth','admin')->name('register');
// Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');


// Route::get('/register', [RegistrationController::class, 'register'])
//     ->middleware(['auth', ])
//     ->name('register');

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    
    Route::get('/register', [RegistrationController::class, 'register'])->name('register');
    Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

});


