<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\Auth\VerifyEmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')->name('home');

Route::group(['prefix' => 'test'], function () {
    Route::get('get', [TestController::class, 'get']);
    Route::post('post', [TestController::class, 'post']);
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/create', [UserController::class, 'createUser']);
    Route::get('/{id}', [UserController::class, 'getUser']);
});

Route::group(['prefix' => 'task', 'middleware' => 'auth'], function () {
    Route::get('/create', [TaskController::class, 'createTask']);
    Route::get('/{id}', [TaskController::class, 'getTask']);
});

Route::group(['prefix' => 'table', 'middleware' => 'auth'], function () {
    Route::get('/create', [TableController::class, 'createTable']);
    Route::get('/{id}', [TableController::class, 'getTable']);
});

Route::middleware('guest')->group(function () {
    Route::view('register', 'auth.register')->name('register');

    Route::view('login', 'auth.login')->name('login');

    Route::view('forgot-password', 'auth.forgot-password')->name('password.request');

    Route::view('reset-password/{token}', 'auth.reset-password')->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::view('verify-email', 'auth.verify-email')->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::view('confirm-password', 'auth.confirm-password')->name('password.confirm');
});
