<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    ContentController,
    DashboardController,
    GroupController,
    UserController,
    WelcomeController
};

Route::get('/', [AuthController::class, 'login'])->name('auth.index');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');
Route::get('welcome', [WelcomeController::class, 'index'])->name('dashboard.index');

Route::group(['prefix' => 'app', 'as' => 'dashboard.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('contents', ContentController::class);
    Route::resource('users', UserController::class);
    Route::get('users/import', [UserController::class, 'import'])->name('users.import');
    Route::resource('groups', GroupController::class);
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
});
