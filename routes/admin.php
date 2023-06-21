<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\auth\LoginController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/



// Authentication Routes...
Route::prefix('admin')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'showLoginForm')->name('admin.showLoginForm');
        Route::post('login', 'login')->name('admin.login');
        Route::get('logout', 'logout')->name('admin.logout');
    });
});

// admin
Route::prefix('admin')->middleware('admin')->group(function () {
    // Admin routes go here.
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'dashboard');
        Route::get('users', 'users_view');
        Route::get('profile', 'profile_view');
        Route::get('/', 'redirect');
    });
});
