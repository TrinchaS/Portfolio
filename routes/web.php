<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\EstudioController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('estudios')->group(function(){
    Route::get('/',[EstudioController::class,'index']);
    Route::get('/buscar/{id}',[EstudioController::class,'show']);
    Route::get('/crear',[EstudioController::class,'store']);
});