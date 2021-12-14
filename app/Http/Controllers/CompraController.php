<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Usuario;
use App\Models\Proveedore;
use App\Models\Producto;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(){
        $compra = Compra::all();
        $usuario = Usuario::all();
        $proveedor = Proveedore::all();
        $producto = Producto::all();
        return view('compra.index', compact(['compra', 'usuario', 'proveedor', 'producto']));
    }

    public function create(){
        $usuario = Usuario::all();
        $proveedor = Proveedore::all();
        $producto = Producto::all();
        return view('compra.create', compact(['usuario', 'proveedor', 'producto']));
    }

    public function store(Request $request){
        $request->validate([
            'usuarioid' => 'required',
            'proveedorid' => 'required',
            'productoid' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'unidad' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'subtotal' => 'required',
            'total' => 'required'
        ]);

        $compra = new Compra;
        $compra->usuarioid = $request['usuarioid'];
        $compra->proveedorid = $request['proveedorid'];
        $compra->productoid = $request['productoid'];
        $compra->fecha = $request->input('fecha');
        $compra->descripcion = $request->input('descripcion');
        $compra->unidad = $request->input('unidad');
        $compra->cantidad = $request->input('cantidad');
        $compra->precio = $request->input('precio');
        $compra->subtotal = $request->input('subtotal');
        $compra->total = $request->input('total');
        $compra->save();

        $compra = Compra::all();
        $usuario = Usuario::all();
        $proveedor = Proveedore::all();
        $producto = Producto::all();
        return view('compra.index', compact(['compra', 'usuario', 'proveedor', 'producto']));
    }

    public function show(Compra $compra){
        $usuario = Usuario::all();
        $proveedor = Proveedore::all();
        $producto = Producto::all();
        return view('compra.show', compact(['compra', 'usuario', 'proveedor', 'producto']));
    }

    public function edit(Compra $compra){
        $usuario = Usuario::all();
        $proveedor = Proveedore::all();
        $producto = Producto::all();
        return view('compra.edit', compact(['compra', 'usuarios', 'proveedor', 'productos']));
    }

    public function update(Request $request, Compra $compra){
        $request->validate([
            'usuarioid' => 'required',
            'proveedorid' => 'required',
            'productoid' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'unidad' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'subtotal' => 'required',
            'total' => 'required'
        ]);

        $compra->usuarioid = $request['usuarioid'];
        $compra->proveedorid = $request['proveedorid'];
        $compra->productoid = $request['productoid'];
        $compra->fecha = $request->input('fecha');
        $compra->descripcion = $request->input('descripcion');
        $compra->unidad = $request->input('unidad');
        $compra->cantidad = $request->input('cantidad');
        $compra->precio = $request->input('precio');
        $compra->subtotal = $request->input('subtotal');
        $compra->total = $request->input('total');
        $compra->save();

        $usuario = Usuario::all();
        $proveedor = Proveedore::all();
        $producto = Producto::all();
        return view('compra.index', compact(['compra', 'usuario', 'proveedor', 'producto']));
    }

    public function destroy(Compra $compra){
        $compra->delete();
        return redirect()->route('compra.index');
    }
}
