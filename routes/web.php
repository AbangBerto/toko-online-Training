<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Halaman utama (opsional)
Route::get('/', function () {
    return view('welcome');
});

// ======================
// REGISTER
// ======================

// Form register
Route::get('/register', function () {
    return view('auth.register');
})->name('register.form');

// Proses register
Route::post('/register', [RegisterController::class, 'register'])->name('register');


// ======================
// LOGIN & LOGOUT
// ======================

// Form login
Route::get('/login', function () {
    return view('auth.login');
})->name('login.form');

// Proses login
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Proses logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// ======================
// EMAIL VERIFICATION
// ======================

// Halaman yang suruh cek email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Link dari email (yang diklik user)
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // set email_verified_at

    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Kirim ulang email verifikasi
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Link verifikasi telah dikirim ulang ke email kamu!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// ======================
// DASHBOARD (HANYA USER LOGIN + VERIFIED)
// ======================

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
