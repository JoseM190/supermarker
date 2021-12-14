<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categoria = Categoria::all();
        return view('categoria.index', compact('categoria'));
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

        $categoria = new Categoria;
        $categoria->nombre = $request->input('nombre');
        $categoria->pasillo = $request->input('pasillo');
        $categoria->estado = $request->input('estado');
        $categoria->save();

        return redirect()->route('categoria.show', $categoria);
    }

    public function show(Categoria $categoria){
        return view('categoria.show', compact('categoria'));
    }

    public function edit(Categoria $categoria){
        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria){
        $request->validate([
            'nombre' => 'required',
            'pasillo' => 'required',
            'estado' => 'required'
        ]);

        $categoria->nombre = $request->input('nombre');
        $categoria->pasillo = $request->input('pasillo');
        $categoria->estado = $request->input('estado');
        $categoria->save();

        $categoria = Categoria::all();
        return view('categoria.index', compact('categoria'));
    }

    public function destroy(Categoria $categoria){
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
