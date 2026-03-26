<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function() { return view('welcome'); });
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('auth', [AuthController::class, 'auth'])->name('admin.auth');
    // Route::post('verify-otp', [AuthController::class, 'otpVerified'])->name('admin.verify-otp');
    Route::post('forget/password', [AuthController::class, 'forgetpassword'])->name('forget.password');

});


Route::group(['middleware' => 'auth'], function () {

});
