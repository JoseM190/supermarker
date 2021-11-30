@extends('layouts.plantilla')

@section('title','Cliente')

@section('content')
    <h1>Bienvenido a la seccion cliente</h1>
    <a href=" {{clientes.create}} "> Crear Cliente </a>
    <br>
    <a href=" {{clientes.edit, $cliente}} "> Editar Cliente</a>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <a href="{{ route('clientes.show'), $clientes->idcliente}}"> {{$cliente->nombre}} </a>
            </li>
        @endforeach
    </ul>

    {{ $clientes->links }}
@endsection
