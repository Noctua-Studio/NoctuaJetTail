<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use CodeZero\LocalizedRoutes\Controller\FallbackController;
use CodeZero\LocalizedRoutes\Middleware\SetLocale;
use Illuminate\Support\Facades\Lang;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::localized(function(){
    Route::get('/', [WebController::class,'index'])->name('home');
    Route::get(lang::uri('/nosotros'),[WebController::class,'us'])->name('us');
    Route::get(lang::uri('/productos'),[WebController::class,'products'])->name('products');
    Route::get(lang::uri('/ordenar'),[WebController::class,'order'])->name('order');

});


Route::fallback(FallbackController::class)->middleware(SetLocale::class);