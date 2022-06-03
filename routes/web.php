<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController
};

Route::get('/', [AuthController::class, 'login'])->name('auth.index');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
