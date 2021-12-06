<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();
        $cliente = Cliente::orderBy('id', 'desc')->paginate();

        return view('clientes.index', compact('cliente'));
    }

    public function create(){
        return view('clientes.create',);
    }

    public function store(Request $request){

        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'celular' => 'required'
        ]);

        $cliente = new Cliente();

        $cliente->cedula = $request->cedula;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->celular = $request->celular;

        $cliente->save();
        return view('clientes.index', compact('clientes'));
        //return redirect()->route('clientes.show', $cliente);
    }

    public function show(Cliente $cliente){

        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente){

        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente){

        $fields = $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'celular' => 'required'
        ]);

        $cliente->cedula = $request->cedula;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->celular = $request->celular;

        $cliente->update($fields);
        $cliente = Cliente::all();

        return view('clientes.index', compact('cliente'));
        //$cliente->save();
        //return redirect()->route('clientes.show', $cliente);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();

        $cliente = Cliente::all();

        return redirect()->route('clientes.index', compact('cliente'))->with('status', 'Cliente eliminado');
    }
}
