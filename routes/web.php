<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController; //cliente
use App\Http\Controllers\CargoController; // cargo
use App\Http\Controllers\UsuarioController; // usuario
use App\Http\Controllers\CategoriaController; // categoria
use App\Http\Controllers\ProveedorController; // proveedor
use App\Http\Controllers\ProductoController; // producto
use App\Http\Controllers\CompraController; // compra
use App\Http\Controllers\VentaController; // venta
use App\Http\Controllers\FacturaController; // factura
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

//categoria
Route::get('categorias', [CategoriaController::class, 'index']);
Route::get('categorias/create', [CategoriaController::class, 'create']);
Route::get('categorias/{categoria}', [CategoriaController::class, 'show']);

//proveedor
Route::get('proveedores', [ProveedorController::class, 'index']);
Route::get('proveedores/create', [ProveedorController::class, 'create']);
Route::get('proveedores/{proveedor}', [ProveedorController::class, 'show']);

//producto
Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);

//compra
Route::get('compras', [CompraController::class, 'index']);
Route::get('compras/create', [CompraController::class, 'create']);
Route::get('compras/{compra}', [CompraController::class, 'show']);

//venta
Route::get('ventas', [VentaController::class, 'index']);
Route::get('ventas/create', [VentaController::class, 'create']);
Route::get('ventas/{venta}', [VentaController::class, 'show']);

//factura
Route::get('facturas', [FacturaController::class, 'index']);
Route::get('facturas/create', [FacturaController::class, 'create']);
Route::get('facturas/{factura}', [FacturaController::class, 'show']);
