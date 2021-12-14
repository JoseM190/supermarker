<?php

namespace App\Http\Controllers;

use App\Models\Proveedore;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        $proveedor = Proveedore::all();
        return view('proveedor.index', compact('proveedor'));
    }

    public function create(){
        return view('proveedor.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'ciudad' => 'required',
            'correo' => 'required',
            'empresa' => 'required',
            'celular' => 'required',
            'estado' => 'required'
        ]);

        $proveedor = new Proveedore;
        $proveedor->nombre = $request->input('nombre');
        $proveedor->apellido = $request->input('apellido');
        $proveedor->ciudad = $request->input('ciudad');
        $proveedor->correo = $request->input('correo');
        $proveedor->empresa = $request->input('empresa');
        $proveedor->celular = $request->input('celular');
        $proveedor->estado = $request->input('estado');
        $proveedor->save();

        return redirect()->route('proveedor.show', $proveedor);
    }

    public function show(Proveedore $proveedor){
        return view('proveedor.show', compact('proveedor'));
    }

    public function edit(Proveedore $proveedor){
        return view('proveedor.edit', compact('proveedor'));
    }

    public function update(Request $request, Proveedore $proveedor){
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'ciudad' => 'required',
            'correo' => 'required',
            'empresa' => 'required',
            'celular' => 'required',
            'estado' => 'required'
        ]);

        $$proveedor->nombre = $request->input('nombre');
        $proveedor->apellido = $request->input('apellido');
        $proveedor->ciudad = $request->input('ciudad');
        $proveedor->correo = $request->input('correo');
        $proveedor->empresa = $request->input('empresa');
        $proveedor->celular = $request->input('celular');
        $proveedor->estado = $request->input('estado');
        $proveedor->save();

        $proveedor = Proveedore::all();
        return view('proveedor.index', compact('proveedor'));
    }

    public function destroy(Proveedore $proveedor){
        $proveedor->delete();
        return redirect()->route('proveedor.index');
    }
}
