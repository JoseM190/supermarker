<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        $venta = Venta::all();
        $producto = Producto::all();
        return view('venta.index', compact(['venta', 'producto']));
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

        $venta = new Venta;
        $venta->productoid = $request['productoid'];
        $venta->cantidad = $request->input('cantidad');
        $venta->precio = $request->input('precio');
        $venta->unidad = $request->input('unidad');
        $venta->subtotal = $request->input('subtotal');
        $venta->save();

        $venta = Venta::all();
        $producto = Producto::all();
        return view('venta.index', compact(['venta', 'producto']));
    }

    public function show(Venta $venta){
        $producto = Producto::all();
        return view('venta.show', compact(['venta', 'producto']));
    }

    public function edit(Venta $venta){
        $producto = Producto::all();
        return view('venta.edit', compact(['venta', 'producto']));
    }

    public function update(Request $request, Venta $venta){
        $request->validate([
            'productoid' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'unidad' => 'required',
            'subtotal' => 'required'
        ]);

        $venta->productoid = $request['productoid'];
        $venta->cantidad = $request->input('cantidad');
        $venta->precio = $request->input('precio');
        $venta->unidad = $request->input('unidad');
        $venta->subtotal = $request->input('subtotal');
        $venta->save();

        $producto = Producto::all();
        return view('venta.index', compact(['venta', 'producto']));
    }

    public function destroy(Venta $venta){
        $venta->delete();
        return redirect()->route('venta.index');
    }
}
