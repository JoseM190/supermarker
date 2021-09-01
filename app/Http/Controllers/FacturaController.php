<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        return view('facturas.index');
    }

    public function create(){
        return view('facturas.create');
    }

    public function show($factura){
        return view('facturas.show', ['factura' => $factura]);
    }
}
