<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EstudioController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);

Route::resource('estudios', EstudioController::class);
Route::resource('habilidades', HabilidadController::class);
Route::resource('experiencias', ExperienciaController::class);
Route::resource('proyectos', ProyectoController::class);

Route::prefix('admin')->group(function(){
    Route::middleware('logueado:0')->group(function(){ //el argumento al middleware ya no haria falta
        Route::get('/login',[AdminController::class,'login']); //este ya no haria falta
        Route::put('/login',[AdminController::class,'loguear']);
    });
    Route::middleware('logueado:1')->group(function(){
        Route::get('/',[AdminController::class,'index']);
        Route::get('/logout',[AdminController::class,'logout']);
        Route::get('/creandoUsuario',[AdminController::class,'creandoUsuario']);
        Route::put('/creandoUsuario',[AdminController::class,'creaUsuario']);
    });
});
