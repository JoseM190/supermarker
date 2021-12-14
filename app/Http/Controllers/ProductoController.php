<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedore;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('producto.index', compact(['productos', 'categorias', 'proveedores']));
    }

    public function create(){
        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('producto.create', compact(['categorias', 'proveedores']));
    }

    public function store(Request $request){
        $request->validate([
            'categoriaid' => 'required',
            'proveedorid' => 'required',
            'nombre' => 'required',
            'cantidad' => 'required',
            'unidad' => 'required',
            'precio' => 'required',
            'stock' => 'required'
        ]);

        $producto = new Producto;
        $producto->categoriaid = $request['categoriaid'];
        $producto->proveedorid = $request['proveedorid'];
        $producto->nombre = $request->input('nombre');
        $producto->cantidad = $request->input('cantidad');
        $producto->unidad = $request->input('unidad');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->save();

        $productos = Producto::all();
        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('producto.index', compact(['producto', 'categorias', 'proveedores']));
    }

    public function show(Producto $producto){
        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('producto.show', compact(['producto', 'categorias', 'proveedores']));
    }

    public function edit(Producto $producto){
        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('producto.edit', compact(['producto', 'categorias', 'proveedores']));
    }

    public function update(Request $request, Producto $producto){
        $request->validate([
            'categoriaid' => 'required',
            'proveedorid' => 'required',
            'nombre' => 'required',
            'cantidad' => 'required',
            'unidad' => 'required',
            'precio' => 'required',
            'stock' => 'required'
        ]);

        $producto->categoriaid = $request['categoriaid'];
        $producto->proveedorid = $request['proveedorid'];
        $producto->nombre = $request->input('nombre');
        $producto->cantidad = $request->input('cantidad');
        $producto->unidad = $request->input('unidad');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->save();

        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('producto.index', compact(['producto', 'categorias', 'proveedores']));
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('producto.index')->with('status', 'Producto eliminado');
    }
}
