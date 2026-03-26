<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function() { return view('pages.landing.index'); })->name('landing');
    Route::get('/product', function() { return view('pages.product'); })->name('product');
    Route::get('/pricing', function() { return view('pages.pricing'); })->name('pricing');
    Route::get('/features', function() { return view('pages.features'); })->name('features');
    Route::get('/about', function() { return view('pages.about'); })->name('about');
    Route::get('/contact', function() { return view('pages.contact'); })->name('contact');
    Route::get('/dashboard-preview', function() { return view('pages.dashboard'); })->name('dashboard');
    Route::post('/contact-submit', function() { return response()->json(['status' => 'success', 'message' => 'Message sent successfully!']); })->name('contact.submit');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('auth', [AuthController::class, 'auth'])->name('admin.auth');
    // Route::post('verify-otp', [AuthController::class, 'otpVerified'])->name('admin.verify-otp');
    Route::post('forget/password', [AuthController::class, 'forgetpassword'])->name('forget.password');

});


Route::group(['middleware' => 'auth'], function () {

});
