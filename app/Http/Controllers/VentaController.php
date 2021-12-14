<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        $ventas = Venta::all();
        $productos = Producto::all();
        return view('venta.index', compact(['ventas', 'productos']));
    }

    public function create(){
        $productos = Producto::all();
        return view('venta.create', compact('productos'));
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

        $ventas = Venta::all();
        $productos = Producto::all();
        return view('venta.index', compact(['ventas', 'productos']));
    }

    public function show(Venta $venta){
        $productos = Producto::all();
        return view('venta.show', compact(['venta', 'productos']));
    }

    public function edit(Venta $venta){
        $productos = Producto::all();
        return view('venta.edit', compact(['venta', 'productos']));
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

        $productos = Producto::all();
        return view('venta.index', compact(['venta', 'productos']));
    }

    public function destroy(Venta $venta){
        $venta->delete();
        return redirect()->route('venta.index')->with('status', 'Venta eliminado');
    }
}
