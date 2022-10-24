<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/home', function() {
            return view('admin.index');
        })->name('home-admin');

        //Control de usuarios
        Route::get('/usuarios', [UserController::class, 'index'])
        ->name('users');

        Route::get('/usuarios/agregar', [UserController::class, 'create'])
        ->name('users.create');
        Route::post('/usuarios/agregar', [UserController::class, 'store'])
        ->name('users.store');

        Route::get('/usuarios/ver/{id}', [UserController::class, 'show'])
        ->name('users.show');
    });