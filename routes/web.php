<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
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

Route::middleware('guest')->group(function () {
    Route::view('register', 'auth.register')->name('register');

    Route::view('login', 'auth.login')->name('login');

    Route::view('forgot-password', 'auth.forgot-password')->name('password.request');

    Route::view('reset-password/{token}', 'auth.reset-password')->name('password.reset');
});

Route::middleware('auth')->group(function () {

    Route::get('/user/{id}/profile', function ($id) {
        return view('user.profile', ['userId' => $id]);
    });

    Route::get('/user/{id}/tables', function ($id) {
        if (!Gate::allows('can-check-tables', ['userId' => $id])) {
            return redirect('/');
        }
        return view('user.tables', ['userId' => $id]);
    });

    Route::get('table/{id}', function ($id) {
        if (!Gate::allows('can-check-table', ['tableId' => $id])) {
            return redirect('/');
        }
        return view('table.table', ['tableId' => $id]);
    });

    Route::get('table/{id}/tasks', function ($id) {
        if (!Gate::allows('can-check-table', ['tableId' => $id])) {
            return redirect('/');
        }
        return view('table.tasks', ['tableId' => $id]);
    });

    Route::get('table/{tableId}/task/{taskId}', function ($tableId, $taskId) {
        return view('table.task', ['tableId' => $tableId, 'taskId' => $taskId]);
    });

    Route::view('verify-email', 'auth.verify-email')->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::view('confirm-password', 'auth.confirm-password')->name('password.confirm');
});
