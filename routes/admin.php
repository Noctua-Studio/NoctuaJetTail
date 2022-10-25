<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {

        Route::name('admin.')->group(function(){
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');
    
            Route::get('/home', function() {
                return view('admin.index');
            })->name('home-admin');
    
            //Edición
            Route::name('edition.')->group(function(){
    
                //Control de usuarios
                Route::resource('/usuarios', UserController::class)
                ->names('users');
    
            });
        });
        
    });