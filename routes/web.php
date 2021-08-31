<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController; //cliente
use App\Http\Controllers\CargoController; // cargo
use App\Http\Controllers\UsuarioController; // usuario
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

Route::get('/', HomeController::class);

//cliente
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/create', [ClienteController::class, 'create']);
Route::get('clientes/{cliente}', [ClienteController::class, 'show']);

//cargo
Route::get('cargos', [CargoController::class, 'index']);
Route::get('cargos/create', [CargoController::class, 'create']);
Route::get('cargos/{cargo}', [CargoController::class, 'show']);

//usuario
Route::get('usuarios', [UsuarioController::class, 'index']);
Route::get('usuarios/create', [UsarioController::class, 'create']);
Route::get('usuarios/{usuario}', [UsuarioController::class, 'show']);
