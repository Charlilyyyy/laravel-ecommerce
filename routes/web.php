<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardMemberController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/loggedIn',[LoginController::class,'login'])->name('loggedIn');
Route::get('/register',[SignupController::class,'index'])->name('register');
Route::post('/registered',[SignupController::class,'register'])->name('registered');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//dashboard-member
Route::get('/dashboard-member',[DashboardMemberController::class,'index'])->name('dashboard-member')->middleware('auth');

