<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\FacturaController;


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

//Route::get('/', HomeController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('/auth/callback/{provider}', [SocialController::class, 'handleProviderCallback']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

//Route::resource('tiendas', TiendaController::class);
//Route::get('tiendas/{producto}', [TiendaController::class, 'crearPedido'])->name('tiendas.crearPedido');




Route::resource('cliente', ClienteController::class);
Route::resource('cargo', CargoController::class);
Route::resource('usuario', UsuarioController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('proveedor', ProveedorController::class);
Route::resource('producto', ProductoController::class);
Route::resource('compra', CompraController::class);
Route::resource('venta', VentaController::class);
Route::resource('factura', FacturaController::class);
