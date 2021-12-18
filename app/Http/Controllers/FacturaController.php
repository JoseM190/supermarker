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
        $factura = Factura::all();
        $usuario = Usuario::all();
        $cliente = Cliente::all();
        $venta = Venta::all();
        return view('factura.index', compact(['factura', 'usuario', 'cliente', 'venta']));
    }

    public function create(){
        $usuario = Usuario::all();
        $cliente = Cliente::all();
        $venta = Venta::all();
        return view('factura.create', compact(['usuario', 'cliente', 'venta']));
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
        $factura->clientesid = $request['clientesid'];
        $factura->ventaid = $request['ventaid'];
        $factura->fecha = $request->input('fecha');
        $factura->descripcion = $request->input('descripcion');
        $factura->total = $request->input('total');
        $factura->save();

        $factura = Factura::all();
        $usuario = Usuario::all();
        $cliente = Cliente::all();
        $venta = Venta::all();
        return view('factura.index', compact(['factura', 'usuario', 'cliente', 'venta']));
    }

    public function show(Factura $factura){
        $usuario = Usuario::all();
        $cliente = Cliente::all();
        $venta = Venta::all();
        return view('factura.show', compact(['factura', 'usuario', 'cliente', 'venta']));
    }

    public function edit(Factura $factura){
        $usuario = Usuario::all();
        $cliente = Cliente::all();
        $venta = Venta::all();
        return view('factura.edit', compact(['factura', 'usuario', 'cliente', 'venta']));
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
        $factura->clientesid = $request['clientesid'];
        $factura->ventaid = $request['ventaid'];
        $factura->fecha = $request->input('fecha');
        $factura->descripcion = $request->input('descripcion');
        $factura->total = $request->input('total');
        $factura->save();

        $usuario = Usuario::all();
        $cliente = Cliente::all();
        $venta = Venta::all();
        return view('factura.index', compact(['factura', 'usuario', 'cliente', 'venta']));
    }

    public function destroy(Factura $factura){
        $factura->delete();
        return redirect()->route('factura.index');
    }
}
