<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
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
                    <form action="{{route('producto.update', $producto)}}" method="POST">
                        @csrf @method('PUT')
                        <br>
                        <div class="mb-6">
                            <label for="categoriaid" class="text-sm font-medium text-gray-900 block mb-2">Categoria: </label>
                            <select name="categoriaid" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @foreach ($categorium as $categorium)
                                    <option value="{{$categorium->idcategoria}}">{{$categorium->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="proveedorid" class="text-sm font-medium text-gray-900 block mb-2">Proveedor: </label>
                            <select name="proveedorid" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @foreach ($proveedor as $proveedor)
                                    <option value="{{$proveedor->idproveedor}}">{{$proveedor->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="nombre" class="text-sm font-medium text-gray-900 block mb-2">Nombre: </label>
                            <input value=" {{old('nombre', $producto->nombre)}} " type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="cantidad" class="text-sm font-medium text-gray-900 block mb-2">Cantidad: </label>
                            <input value=" {{old('cantidad', $producto->cantidad)}} " type="text" id="cantidad" name="cantidad" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="unidad" class="text-sm font-medium text-gray-900 block mb-2">Unidad: </label>
                            <input value=" {{old('unidad', $producto->unidad)}} " type="text" id="unidad" name="unidad" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="precio" class="text-sm font-medium text-gray-900 block mb-2">Precio: </label>
                            <input value=" {{old('precio', $producto->precio)}} " type="text" id="precio" name="precio" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="stock" class="text-sm font-medium text-gray-900 block mb-2">Stock: </label>
                            <input value=" {{old('stock', $producto->stock)}} " type="text" id="stock" name="stock" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div style="text-align: center;">
                            <a href="{{ route('producto.index') }}"
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
