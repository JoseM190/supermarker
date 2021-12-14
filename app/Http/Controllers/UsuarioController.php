<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Cargo;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuario = Usuario::all();
        $cargo = Cargo::all();
        return view('usuario.index', compact(['usuario', 'cargo']));
    }

    public function create(){
        $cargo = Cargo::all();
        return view('usuario.create', compact('cargo'));
    }

    public function store(Request $request){
        $request->validate([
            'idcargo' => 'required',
            'nombre_usuario' => 'required',
            'apellido_usuario' => 'required',
            'cedula_usuario' => 'required',
            'celular_usuario' => 'required',
            'direccion_usuario' => 'required',
            'correo_usuario' => 'required',
            'contraseña_usuario' => 'required',
            'estado_usuario' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->idcargo = $request['idcargo'];
        $usuario->nombre_usuario = $request->input('nombre_usuario');
        $usuario->apellido_usuario = $request->input('apellido_usuario');
        $usuario->cedula_usuario = $request->input('cedula_usuario');
        $usuario->celular_usuario = $request->input('celular_usuario');
        $usuario->direccion_usuario = $request->input('direccion_usuario');
        $usuario->correo_usuario = $request->input('correo_usuario');
        $usuario->contraseña_usuario = $request->input('contraseña_usuario');
        $usuario->estado_usuario = $request->input('estado_usuario');
        $usuario->save();

        $usuario = Usuario::all();
        $cargo = Cargo::all();
        return view('usuario.show', compact(['usuario', 'cargo']));
    }

    public function show(Usuario $usuario){
        $cargo = Cargo::all();
        return view('usuario.show', compact(['usuario', 'cargo']));
    }

    public function edit(Usuario $usuario){
        $cargo = Cargo::all();
        return view('usuario.edit', compact(['usuario', 'cargo']));
    }

    public function update(Request $request, Usuario $usuario){
        $request->validate([
            'idcargo' => 'required',
            'nombre_usuario' => 'required',
            'apellido_usuario' => 'required',
            'cedula_usuario' => 'required',
            'celular_usuario' => 'required',
            'direccion_usuario' => 'required',
            'correo_usuario' => 'required',
            'contraseña_usuario' => 'required',
            'estado_usuario' => 'required'
        ]);

        $usuario->idcargo = $request['idcargo'];
        $usuario->nombre_usuario = $request->input('nombre_usuario');
        $usuario->apellido_usuario = $request->input('apellido_usuario');
        $usuario->cedula_usuario = $request->input('cedula_usuario');
        $usuario->celular_usuario = $request->input('celular_usuario');
        $usuario->direccion_usuario = $request->input('direccion_usuario');
        $usuario->correo_usuario = $request->input('correo_usuario');
        $usuario->contraseña_usuario = $request->input('contraseña_usuario');
        $usuario->estado_usuario = $request->input('estado_usuario');
        $usuario->save();

        $cargo = Cargo::all();
        return view('usuario.index', compact(['usuario', 'cargo']));
    }

    public function destroy(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
