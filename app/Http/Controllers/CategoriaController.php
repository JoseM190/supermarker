<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return view('categorias.index');
    }

    public function create(){
        return view('categorias.create');
    }

    public function show($categoria){
        return view('categorias.show', ['categoria' => $categoria]);
    }
}
