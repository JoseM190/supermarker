<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(){
        return view('compras.index');
    }

    public function create(){
        return view('compras.create');
    }

    public function show($compra){
        return view('compras.show', ['compra' => $compra]);
    }
}
