<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
         $clientes = Cliente::orderBy('id', 'desc')->paginate();

        return view('clientes.index', compact('clientes'));
    }

    public function create(){
        return view('clientes.create',);
    }

    public function store(Request $request){

        $request->validate([
            'idcliente' => 'required',
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'celular' => 'required'
        ]);

        $cliente = new Cliente();

        $cliente->idcliente = $request->idcliente;
        $cliente->cedula = $request->cedula;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->celular = $request->celular;

        $cliente->save();
        return redirect()->route('clientes.show', $cliente);
    }

    public function show(Cliente $cliente){

        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente){

        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente){

        $request->validate([
            'idcliente' => 'required',
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'celular' => 'required'
        ]);

        $cliente->idcliente = $request->idcliente;
        $cliente->cedula = $request->cedula;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->celular = $request->celular;

        $cliente->save();
        return redirect()->route('clientes.show', $cliente);
    }
}
