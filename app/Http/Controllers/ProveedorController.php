<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        return view('proveedores.index');
    }

    public function create(){
        return view('proveedores.create');
    }

    public function show($proveedor){
        return view('proveedores.show', ['proveedor' => $proveedor]);
    }
}
