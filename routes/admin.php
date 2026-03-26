<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\HolidayController;
use App\Http\Controllers\Admin\MeetingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\InterviewController;
use App\Http\Controllers\Admin\UserOnboardingController;
use App\Http\Controllers\Admin\RolePermissionMappingController;
use App\Http\Controllers\Admin\RoutePermissionMappingController;
use App\Http\Controllers\CandidateController;

Route::group(['middleware' => 'guest'], function () {
    // Route::group(['prefix' => 'candidate'], function () {
    //     Route::get('/', [CandidateController::class, 'loginPage'])->name('candidate.login');
    //     Route::post('login', [CandidateController::class, 'login'])->name('candidate.save');
    // });

    Route::get('/', [CandidateController::class, 'home'])->name('home');
    Route::get('admin/login', [AuthController::class, 'loadLogin'])->name('login');
    Route::post('auth', [AuthController::class, 'login'])->name('admin.auth');
    Route::post('admin/verify-otp', [AuthController::class, 'otpVerified'])->name('admin.verify-otp');
    Route::post('forget/password', [AuthController::class, 'forgetpassword'])->name('forget.password');
});


Route::group(['middleware' => ['isAdmin'], 'prefix' => 'admin'], function () {
    Route::get('forgetPassword', [AuthController::class, 'showforget']);
    Route::post('changePassword', [AuthController::class, 'changepassword']);
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('get-employee-details', [DashboardController::class, 'getEmployeeAttendenceDetails'])->name('admin.dashboard.employee_data');
        Route::get('get-holiday-details', [DashboardController::class, 'getHolidayDetails'])->name('admin.dashboard.holiday_year');
        Route::get('get-id-holiday-details', [DashboardController::class, 'getIdBaseHolidayDetails'])->name('admin.dashboard.holiday_id');
    });

    Route::group(['prefix' => 'meeting'], function () {
        Route::get('/', [MeetingController::class, 'index'])->name('admin.meeting.index');
        Route::post('save', [MeetingController::class, 'save'])->name('admin.meeting.save');
        Route::post('update', [MeetingController::class, 'update'])->name('admin.meeting.update');
        Route::post('delete', [MeetingController::class, 'delete'])->name('admin.meeting.delete');
        Route::get('show', [MeetingController::class, 'update'])->name('admin.meeting.show');
    });

});
