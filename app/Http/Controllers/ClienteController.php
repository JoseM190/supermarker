<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class ClienteController extends Controller
{
    use WithPagination;
    public function index(){
        $cliente = Cliente::all();
        $cliente = Cliente::orderBy('id', 'desc')->paginate();

        return view('cliente.index', compact('cliente'));
    }

    public function create(){
        return view('cliente.create',);
    }

    public function store(Request $request){

        $fields = $request->validate([
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

        $cliente->save($fields);
        return view('cliente.index', compact('cliente'));
        //return redirect()->route('cliente.show', $cliente);
    }

    public function show(Cliente $cliente){

        return view('cliente.show', compact('cliente'));
    }

    public function edit(Cliente $cliente){

        return view('cliente.edit', compact('cliente'));
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

        return view('cliente.index', compact('cliente'));
        //$cliente->save();
        //return redirect()->route('cliente.show', $cliente);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();

        $cliente = Cliente::all();

        return redirect()->route('cliente.index', compact('cliente'))->with('status', 'Cliente eliminado');
    }
}
