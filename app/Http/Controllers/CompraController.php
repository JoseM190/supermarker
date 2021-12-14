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
        $compras = Compra::all();
        $usuarios = Usuario::all();
        $proveedores = Proveedore::all();
        $productos = Producto::all();
        return view('compra.index', compact(['compras', 'usuarios', 'proveedores', 'productos']));
    }

    public function create(){
        $usuarios = Usuario::all();
        $proveedores = Proveedore::all();
        $productos = Producto::all();
        return view('compra.create', compact(['usuarios', 'proveedores', 'productos']));
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

        $compras = Compra::all();
        $usuarios = Usuario::all();
        $proveedores = Proveedore::all();
        $productos = Producto::all();
        return view('compra.index', compact(['compras', 'usuarios', 'proveedores', 'productos']));
    }

    public function show(Compra $compra){
        $usuarios = Usuario::all();
        $proveedores = Proveedore::all();
        $productos = Producto::all();
        return view('compra.show', compact(['compra', 'usuarios', 'proveedores', 'productos']));
    }

    public function edit(Compra $compra){
        $usuarios = Usuario::all();
        $proveedores = Proveedore::all();
        $productos = Producto::all();
        return view('compra.edit', compact(['compra', 'usuarios', 'proveedores', 'productos']));
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

        $usuarios = Usuario::all();
        $proveedores = Proveedore::all();
        $productos = Producto::all();
        return view('compra.index', compact(['compra', 'usuarios', 'proveedores', 'productos']));
    }

    public function destroy(Compra $compra){
        $compra->delete();
        return redirect()->route('compra.index')->with('status', 'Compra eliminado');
    }
}
