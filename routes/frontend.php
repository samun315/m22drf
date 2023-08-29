<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

//Auth
Route::get('login', [AuthController::class, 'showLoginForm'])->name('frontend.showLoginForm');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('frontend.showRegisterForm');
Route::get('reset-password', [AuthController::class, 'showResetPasswordForm'])->name('frontend.showResetPasswordForm');
Route::get('change-password', [AuthController::class, 'showChangePasswordForm'])->name('frontend.showChangePasswordForm');
