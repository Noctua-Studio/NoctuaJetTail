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
    
            //El middleware protege la ruta por autorización de permiso (recordad que los permisos están vinculados a roles)
            Route::get('/home', function() {
                return view('admin.index');
            })->middleware('can:home')->name('home');
    
            //Edición
    
                //Control de usuarios
            Route::resource('/usuarios', UserController::class)
            ->names('users');


            //RUTAS DE EDICIÓN DE ROLES Y USUARIOS
            Route::get('/usuarios/roleEdit/{id}', [UserController::class,'roleEdit'])->name('users.roleEdit');

            Route::put('/usuarios/roleUpdate/{user}', [UserController::class,'roleUpdate'])->name('users.roleUpdate');
        });
        
    });