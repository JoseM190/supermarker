@extends('layouts.plantilla')

@section('title','Cliente '. $cliente->nombre)

@section('content')
    <h1> Bienvenido a la seccion cliente: {{ $cliente->nombre }}</h1>
@endsection
