<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;

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

Route::group(['prefix' => 'test'], function () {
    Route::get('get', [TestController::class, 'get']);
    Route::post('post', [TestController::class, 'post']);
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/create', [UserController::class, 'createUser']);
    Route::get('/{id}', [UserController::class, 'getUser']);
});

Route::group(['prefix' => 'task'], function () {
    Route::get('/create', [TaskController::class, 'createTask']);
    Route::get('/{id}', [TaskController::class, 'getTask']);
});

Route::group(['prefix' => 'table'], function () {
    Route::get('/create', [TableController::class, 'createTable']);
    Route::get('/{id}', [TableController::class, 'getTable']);
});
