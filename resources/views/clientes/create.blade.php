@extends('layouts.plantilla')

@section('title','Crear Cliente')

@section('content')
    <h1>En esta seccion podras agregar un cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="">
            Id Cliente: <input type="text" name="idcliente" value="{{old('idcliente')}}">
        </label>
        <br>
        <label for="">
            Cedula: <input type="text" name="cedula" value="{{old('cedula')}}">
        </label>
        @error('cedula')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="">
            Nombre: <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        <br>
        <label for="">
            Apellido: <input type="text" name="apellido" value="{{old('apellido')}}">
        </label>
        <br>
        <label for="">
            Celular: <input type="number" name="celular" value="{{old('celular')}}">
        </label>
        <br>
        <button type="submit">REGISTRAR</button>
    </form>
@endsection
