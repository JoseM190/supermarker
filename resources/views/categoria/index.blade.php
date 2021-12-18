<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categorias
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('categoria.create') }}"
                class="p-2 pl-5 pr-5 bg-indigo-500 text-gray-100 text-lg rounded-lg focus:border-4 border-indigo-300">
                    Registrar Categoria
                </a>
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Id</th>
                                        <th class="px-4 py-3">Nombre</th>
                                        <th class="px-4 py-3">Pasillo</th>
                                        <th class="px-4 py-3">Estado</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($categorium as $categorium)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$categorium->idcategoria}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$categorium->nombre}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$categorium->pasillo}}</td>
                                            @if($categorium->estado == 'activo')
                                                <td class="px-4 py-3 text-xs border">
                                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$categorium->estado}} </span>
                                                </td>
                                            @else
                                                <td class="px-4 py-3 text-xs border">
                                                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> {{$categorium->estado}} </span>
                                                </td>
                                            @endif
                                            <td class="px-4 py-3 text-ms font-semibold border" style="text-align: center;">
                                                <div>
                                                    <a class="p-1 pl-3 pr-3 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-30"
                                                        href="{{route('categoria.show', $categorium->idcategoria)}}">
                                                        Editar
                                                    </a>
                                                </div>
                                                <br>
                                                <form action="{{ route('categoria.destroy', $categorium->idcategoria) }}" method="POST">
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
