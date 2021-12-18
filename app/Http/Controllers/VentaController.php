<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        $ventum = Venta::all();
        $producto = Producto::all();
        return view('venta.index', compact(['ventum', 'producto']));
    }

    public function create(){
        $producto = Producto::all();
        return view('venta.create', compact('producto'));
    }

    public function store(Request $request){
        $request->validate([
            'productoid' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'unidad' => 'required',
            'subtotal' => 'required'
        ]);

        $ventum = new Venta;
        $ventum->productoid = $request['productoid'];
        $ventum->cantidad = $request->input('cantidad');
        $ventum->precio = $request->input('precio');
        $ventum->unidad = $request->input('unidad');
        $ventum->subtotal = $request->input('subtotal');
        $ventum->save();

        $ventum = Venta::all();
        $producto = Producto::all();
        return view('venta.index', compact(['ventum', 'producto']));
    }

    public function show(Venta $ventum){
        $producto = Producto::all();
        return view('venta.show', compact(['ventum', 'producto']));
    }

    public function edit(Venta $ventum){
        $producto = Producto::all();
        return view('venta.edit', compact(['ventum', 'producto']));
    }

    public function update(Request $request, Venta $ventum){
        $request->validate([
            'productoid' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'unidad' => 'required',
            'subtotal' => 'required'
        ]);

        $ventum->productoid = $request['productoid'];
        $ventum->cantidad = $request->input('cantidad');
        $ventum->precio = $request->input('precio');
        $ventum->unidad = $request->input('unidad');
        $ventum->subtotal = $request->input('subtotal');
        $ventum->save();

        $producto = Producto::all();
        return view('venta.index', compact(['ventum', 'producto']));
    }

    public function destroy(Venta $ventum){
        $ventum->delete();
        return redirect()->route('venta.index');
    }
}
