<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorium = Categoria::all();
        return view('categoria.index', compact('categorium'));
    }

    public function create(){
        return view('categoria.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'pasillo' => 'required',
            'estado' => 'required'
        ]);

        $categorium = new Categoria;
        $categorium->nombre = $request->input('nombre');
        $categorium->pasillo = $request->input('pasillo');
        $categorium->estado = $request->input('estado');
        $categorium->save();

        return redirect()->route('categoria.show', $categorium);
    }

    public function show(Categoria $categorium){
        return view('categoria.show', compact('categorium'));
    }

    public function edit(Categoria $categorium){
        return view('categoria.edit', compact('categorium'));
    }

    public function update(Request $request, Categoria $categorium){
        $request->validate([
            'nombre' => 'required',
            'pasillo' => 'required',
            'estado' => 'required'
        ]);

        $categorium->nombre = $request->input('nombre');
        $categorium->pasillo = $request->input('pasillo');
        $categorium->estado = $request->input('estado');
        $categorium->save();

        $categorium = Categoria::all();
        return view('categoria.index', compact('categorium'));
    }

    public function destroy(Categoria $categorium){
        $categorium->delete();
        return redirect()->route('categoria.index');
    }
}
