@extends('layouts.plantilla')

@section('title','Editar Cliente')

@section('content')
    <h1>En esta seccion podras editar un cliente</h1>
    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf
        @method('put')
        <label for="">
            Id Cliente: <input type="text" name="idcliente" value="{{old('idcliente', $cliente->idcliente)}} ">
        </label>
        <br>
        <label for="">
            Cedula: <input type="text" name="cedula" value=" {{old('cedula', $cliente->cedula)}} ">
        </label>
        <br>
        <label for="">
            Nombre: <input type="text" name="nombre" value=" {{old('nombre', $cliente->nombre)}} ">
        </label>
        <br>
        <label for="">
            Apellido: <input type="text" name="apellido" value=" {{old('apellido', $cliente->apellido)}} ">
        </label>
        <br>
        <label for="">
            Celular: <input type="number" name="celular" value=" {{old('celular', $cliente->celular)}} ">
        </label>
        <br>
        <button type="submit">ACTUALIZAR</button>
    </form>
@endsection
