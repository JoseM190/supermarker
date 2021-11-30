<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//cliente
Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');


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




