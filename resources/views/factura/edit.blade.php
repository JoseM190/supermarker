<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Facturas
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($errors->any())
                    <div class="alert alert-danger" style="margin-top: 20px;">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li></li>
                            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium">{{$error}}</span>
                                </div>
                            </div>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="max-w-lg mx-auto">
                    <form action="{{route('factura.update', $factura)}}" method="POST">
                        @csrf @method('PUT')
                        <br>
                        <div class="mb-6">
                            <label for="usuarioid" class="text-sm font-medium text-gray-900 block mb-2">Usuario: </label>
                            <select name="usuarioid" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @foreach ($usuario as $usuario)
                                    <option value="{{$usuario->idusuario}}">{{$usuario->nombre_usuario}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="clientesid" class="text-sm font-medium text-gray-900 block mb-2">Cliente: </label>
                            <select name="clientesid" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @foreach ($cliente as $cliente)
                                    <option value="{{$cliente->idcliente}}">{{$cliente->nombre_cliente}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="ventaid" class="text-sm font-medium text-gray-900 block mb-2">Venta: </label>
                            <select name="ventaid" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @foreach ($venta as $venta)
                                    <option value="{{$venta->idventa}}">{{$venta->precio}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="fecha" class="text-sm font-medium text-gray-900 block mb-2">Fecha: </label>
                            <input value=" {{old('fecha', $factura->fecha)}} " type="date" id="fecha" name="fecha" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="descripcion" class="text-sm font-medium text-gray-900 block mb-2">Descripcion: </label>
                            <input value=" {{old('descripcion', $factura->descripcion)}} " type="text" id="descripcion" name="descripcion" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="total" class="text-sm font-medium text-gray-900 block mb-2">Total: </label>
                            <input value=" {{old('total', $factura->total)}} " type="text" id="total" name="total" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div style="text-align: center;">
                            <a href="{{ route('factura.index') }}"
                                class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                                Volver
                            </a>
                            &nbsp&nbsp&nbsp
                            <button type="submit" class="p-2 pl-5 pr-5 bg-green-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">
                                Actualizar
                            </button>
                            <br><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
