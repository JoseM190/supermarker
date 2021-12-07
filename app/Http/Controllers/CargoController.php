<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        $cargo = Cargo::all();
        //$cargo = Cargo::orderBy('id', 'desc')->paginate();

        return view('cargo.index', compact('cargo'));
    }

    public function create(){
        return view('cargo.create',);
    }

    public function store(Request $request){
        $request->validate([
            'nombre_cargo' => 'required'
        ]);

        $cargo = new Cargo;
        $cargo->nombre_cargo = $request->input('nombre_cargo');
        $cargo->save();

        //return view('cargo.index', compact('cargo'));
        return redirect()->route('cargo.show', $cargo);
    }

    public function show(Cargo $cargo){
        return view('cargo.show', compact('cargo'));
    }

    public function edit(Cargo $cargo){
        return view('cargo.edit', compact('cargo'));
    }

    public function update(Request $request, Cargo $cargo){
        $request->validate([
            'nombre_cargo' => 'required'
        ]);

        $cargo->nombre_cargo = $request->input('nombre_cargo');
        //$cargo->update();
        $cargo->save();
        $cargo = Cargo::all();

        return view('cargo.index', compact('cargo'));
        //return redirect()->route('cargo.show', $cargo);
    }

    public function destroy(Cargo $cargo){
        $cargo->delete();
        //$cargo = Cargo::all();
        //return redirect()->route('cargo.index', compact('cargo'))->with('status', 'Cargo eliminado');
        return redirect()->route('cargo.index')->with('status', 'Cargo eliminado');
    }
}
