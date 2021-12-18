<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedore;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $producto = Producto::all();
        $categorium = Categoria::all();
        $proveedor = Proveedore::all();
        return view('producto.index', compact(['producto', 'categorium', 'proveedor']));
    }

    public function create(){
        $categorium = Categoria::all();
        $proveedor = Proveedore::all();
        return view('producto.create', compact(['categorium', 'proveedor']));
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

        $producto = Producto::all();
        $categorium = Categoria::all();
        $proveedor = Proveedore::all();
        return view('producto.index', compact(['producto', 'categorium', 'proveedor']));
    }

    public function show(Producto $producto){
        $categorium = Categoria::all();
        $proveedor = Proveedore::all();
        return view('producto.show', compact(['producto', 'categorium', 'proveedor']));
    }

    public function edit(Producto $producto){
        $categorium = Categoria::all();
        $proveedor = Proveedore::all();
        return view('producto.edit', compact(['producto', 'categorium', 'proveedor']));
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

        $categorium = Categoria::all();
        $proveedor = Proveedore::all();
        return view('producto.index', compact(['producto', 'categorium', 'proveedor']));
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
