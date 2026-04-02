<?php

use App\Http\Controllers\Admin\UserOnboardingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function() { return view('user.pages.landing.index'); })->name('landing');
    Route::get('/product', function() { return view('user.pages.product'); })->name('product');
    Route::get('/features', function() { return view('user.pages.features'); })->name('features');
    Route::get('/about', function() { return view('user.pages.about'); })->name('about');
    Route::get('/contact', function() { return view('user.pages.contact'); })->name('contact');
    Route::get('/dashboard-preview', function() { return view('user.pages.dashboard'); })->name('dashboard');
    Route::post('/contact-submit', function() { return response()->json(['status' => 'success', 'message' => 'Message sent successfully!']); })->name('contact.submit');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('auth', [AuthController::class, 'auth'])->name('admin.auth');
    // Route::post('verify-otp', [AuthController::class, 'otpVerified'])->name('admin.verify-otp');
    Route::get('forget/password', [AuthController::class, 'forgetpasswordPage'])->name('forget.password');
    Route::post('forget/password', [AuthController::class, 'forgetpassword'])->name('forget.password.submit');

});


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('notification', [DashboardController::class, 'notification'])->name('notification');

    Route::group(['prefix' => 'role'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('role.index');
        Route::post('save', [RoleController::class, 'save'])->name('role.save');
        Route::post('update', [RoleController::class, 'update'])->name('role.update');
        Route::post('perm-save', [RoleController::class, 'savePermission'])->name('permission.save');
        Route::post('perm-update', [RoleController::class, 'updatePermission'])->name('permission.update');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserOnboardingController::class, 'index'])->name('user');
        Route::get('create', [UserOnboardingController::class, 'create'])->name('user.create');
        Route::post('save', [UserOnboardingController::class, 'save'])->name('user.save');
        Route::post('update', [UserOnboardingController::class, 'update'])->name('user.update');
        Route::post('delete', [UserOnboardingController::class, 'delete'])->name('user.delete');
        Route::get('excel-sample-download', [UserOnboardingController::class, 'userExcelSampleDownload'])->name('user.excel_sample_download');
        Route::post('bulk-upload', [UserOnboardingController::class, 'userBlukUpload'])->name('user.bulk_upload');
    });



    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
