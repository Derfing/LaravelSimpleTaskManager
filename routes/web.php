<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
