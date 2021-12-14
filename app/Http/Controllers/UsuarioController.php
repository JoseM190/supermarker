<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Cargo;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        $cargos = Cargo::all();
        return view('usuario.index', compact(['usuarios', 'cargos']));
    }

    public function create(){
        $cargos = Cargo::all();
        return view('usuario.create', compact('cargos'));
    }

    public function store(Request $request){
        $request->validate([
            'cargoid' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'celular' => 'required',
            'direccion' => 'required',
            'correo' => 'required',
            'contraseña' => 'required',
            'estado' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->cargoid = $request['cargoid'];
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->cedula = $request->input('cedula');
        $usuario->celular = $request->input('celular');
        $usuario->direccion = $request->input('direccion');
        $usuario->correo = $request->input('correo');
        $usuario->contraseña = $request->input('contraseña');
        $usuario->estado = $request->input('estado');
        $usuario->save();

        $usuarios = Usuario::all();
        $cargos = Cargo::all();
        return view('usuario.index', compact(['usuarios', 'cargos']));
    }

    public function show(Usuario $usuario){
        $cargos = Cargo::all();
        return view('usuario.show', compact(['usuario', 'cargos']));
    }

    public function edit(Usuario $usuario){
        $cargos = Cargo::all();
        return view('usuario.edit', compact(['usuario', 'cargos']));
    }

    public function update(Request $request, Usuario $usuario){
        $request->validate([
            'cargoid' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'celular' => 'required',
            'direccion' => 'required',
            'correo' => 'required',
            'contraseña' => 'required',
            'estado' => 'required'
        ]);

        $usuario->cargoid = $request['cargoid'];
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->cedula = $request->input('cedula');
        $usuario->celular = $request->input('celular');
        $usuario->direccion = $request->input('direccion');
        $usuario->correo = $request->input('correo');
        $usuario->contraseña = $request->input('contraseña');
        $usuario->estado = $request->input('estado');
        $usuario->save();

        $cargos = Cargo::all();
        return view('usuario.index', compact(['usuario', 'cargos']));
    }

    public function destroy(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuario.index')->with('status', 'Usuario eliminado');
    }
}
