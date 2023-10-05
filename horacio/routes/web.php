<?php

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

use App\Http\Controllers\eventController;

Route::get('/',[eventController::class,'index']);

Route::get('/eventos',[eventController::class,'eventos']);
Route::get('/criarEventos',[eventController::class,'criarEventos']);
Route::get('/entrar',[eventController::class,'entrar']);
Route::get('/cadastrar',[eventController::class,'cadastrar']);