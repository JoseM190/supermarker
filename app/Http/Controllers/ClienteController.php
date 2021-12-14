<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();
        return view('cliente.index', compact('cliente'));
    }

    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
        $request->validate([
            'cedula_cliente' => 'required',
            'nombre_cliente' => 'required',
            'apellido_cliente' => 'required',
            'celular_cliente' => 'required'
        ]);

        $cliente = new Cliente;
        $cliente->cedula_cliente = $request->input('cedula_cliente');
        $cliente->nombre_cliente = $request->input('nombre_cliente');
        $cliente->apellido_cliente = $request->input('apellido_cliente');
        $cliente->celular_cliente = $request->input('celular_cliente');
        $cliente->save();

        return redirect()->route('cliente.show', $cliente);
    }

    public function show(Cliente $cliente){
        return view('cliente.show', compact('cliente'));
    }

    public function edit(Cliente $cliente){
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente){
        $request->validate([
            'cedula_cliente' => 'required',
            'nombre_cliente' => 'required',
            'apellido_cliente' => 'required',
            'celular_cliente' => 'required'
        ]);

        $cliente->cedula_cliente = $request->input('cedula_cliente');
        $cliente->nombre_cliente = $request->input('nombre_cliente');
        $cliente->apellido_cliente = $request->input('apellido_cliente');
        $cliente->celular_cliente = $request->input('celular_cliente');
        $cliente->save();

        $cliente = Cliente::all();
        return view('cliente.index', compact('cliente'));
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
