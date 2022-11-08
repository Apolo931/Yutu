<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;


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

Route::get('/', [HomeController::class, 'home']);
Route::get('/videos', [VideoController::class, 'consultar']);
Route::get('/registrar', [VideoController::class, 'registrar']);
Route::post('/guardarRegistro', [VideoController::class, 'guardarRegistro']);
Route::get('/video/eliminar/{id}', [VideoController::class, 'eliminar']);
Route::get('/video/editar/{id}', [VideoController::class, 'editar']);
Route::post('/video/actualizar/{id}', [VideoController::class, 'actualizar']);