<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardMemberController;
use App\Http\Controllers\DashboardVendorController;
use App\Http\Controllers\MemberProfileController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/loggedIn',[LoginController::class,'login'])->name('loggedIn');
Route::get('/register',[SignupController::class,'index'])->name('register');
Route::post('/registered',[SignupController::class,'register'])->name('registered');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    //dashboard-member
    Route::prefix('dashboard-member')->group(function () {
        Route::get('/', [DashboardMemberController::class, 'index'])->name('dashboard-member');
        Route::get('/profile', [MemberProfileController::class, 'index'])->name('member-profile');
    });

    //dashboard-vendor
    Route::get('/dashboard-vendor', [DashboardVendorController::class, 'index'])->name('dashboard-vendor');
});

