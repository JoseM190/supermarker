<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Producto
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('producto.create') }}"
                    class="p-2 pl-5 pr-5 bg-indigo-500 text-gray-100 text-lg rounded-lg focus:border-4 border-indigo-300">
                    Registrar productos
                </a>
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Id</th>
                                        <th class="px-4 py-3">categoria</th>
                                        <th class="px-4 py-3">proveedor</th>
                                        <th class="px-4 py-3">nombre</th>
                                        <th class="px-4 py-3">cantidad</th>
                                        <th class="px-4 py-3">unidad</th>
                                        <th class="px-4 py-3">precio</th>
                                        <th class="px-4 py-3">stock</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($producto as $producto)
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 text-ms font-semibold border">{{$producto->idproducto}}</td>
                                        <td class="px-4 py-3 text-ms font-semibold border">
                                            <span class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-sm">
                                                {{$producto->categoriaid}}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-ms font-semibold border">
                                            <span class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-sm">
                                                {{$producto->proveedorid}}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-ms font-semibold border">{{$producto->nombre}}</td>
                                        <td class="px-4 py-3 text-ms font-semibold border">{{$producto->cantidad}}</td>
                                        <td class="px-4 py-3 text-ms font-semibold border">{{$producto->unidad}}</td>
                                        <td class="px-4 py-3 text-ms font-semibold border">{{$producto->precio}}</td>
                                        <td class="px-4 py-3 text-ms font-semibold border">{{$producto->stock}}</td>
                                        <td class="px-4 py-3 text-ms font-semibold border" style="text-align: center;">
                                            <div>
                                                <a class="p-1 pl-3 pr-3 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-30"
                                                    href="{{route('producto.show', $producto->idproducto)}}">
                                                    Editar
                                                </a>
                                            </div>
                                            <br>
                                            <form action="{{ route('producto.destroy', $producto->idproducto) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="p-1 pl-2 pr-2 bg-red-600 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
