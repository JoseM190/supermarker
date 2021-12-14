<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Venta;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        $facturas = Factura::all();
        $usuarios = Usuario::all();
        $clientes = Cliente::all();
        $ventas = Venta::all();
        return view('factura.index', compact(['facturas', 'usuarios', 'clientes', 'ventas']));
    }

    public function create(){
        $usuarios = Usuario::all();
        $clientes = Cliente::all();
        $ventas = Venta::all();
        return view('factura.create', compact(['usuarios', 'clientes', 'ventas']));
    }

    public function store(Request $request){
        $request->validate([
            'usuarioid' => 'required',
            'clientesid' => 'required',
            'ventaid' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'total' => 'required'
        ]);

        $factura = new Factura;
        $factura->usuarioid = $request['usuarioid'];
        $factura->clientesid = $request['proveedorid'];
        $factura->ventaid = $request['productoid'];
        $factura->fecha = $request->input('fecha');
        $factura->descripcion = $request->input('descripcion');
        $factura->total = $request->input('total');
        $factura->save();

        $facturas = Factura::all();
        $usuarios = Usuario::all();
        $clientes = Cliente::all();
        $ventas = Venta::all();
        return view('factura.index', compact(['facturas', 'usuarios', 'clientes', 'ventas']));
    }

    public function show(Factura $factura){
        $usuarios = Usuario::all();
        $clientes = Cliente::all();
        $ventas = Venta::all();
        return view('factura.show', compact(['factuta', 'usuarios', 'clientes', 'ventas']));
    }

    public function edit(Factura $factura){
        $usuarios = Usuario::all();
        $clientes = Cliente::all();
        $ventas = Venta::all();
        return view('factura.edit', compact(['factura', 'usuarios', 'clientes', 'ventas']));
    }

    public function update(Request $request, Factura $factura){
        $request->validate([
            'usuarioid' => 'required',
            'clientesid' => 'required',
            'ventaid' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'total' => 'required'
        ]);

        $factura->usuarioid = $request['usuarioid'];
        $factura->clientesid = $request['proveedorid'];
        $factura->ventaid = $request['productoid'];
        $factura->fecha = $request->input('fecha');
        $factura->descripcion = $request->input('descripcion');
        $factura->total = $request->input('total');
        $factura->save();

        $usuarios = Usuario::all();
        $clientes = Cliente::all();
        $ventas = Venta::all();
        return view('factura.index', compact(['factura', 'usuarios', 'clientes', 'ventas']));
    }

    public function destroy(Factura $factura){
        $factura->delete();
        return redirect()->route('factura.index')->with('status', 'Factura eliminado');
    }
}
