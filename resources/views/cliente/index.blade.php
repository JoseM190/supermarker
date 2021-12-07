<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Clientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <a href="{{ route('cliente.create') }}"
                class="p-2 pl-5 pr-5 bg-indigo-500 text-gray-100 text-lg rounded-lg focus:border-4 border-indigo-300">
                    Registrar Cliente
                </a>

                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Id</th>
                                        <th class="px-4 py-3">Cedula</th>
                                        <th class="px-4 py-3">Nombre</th>
                                        <th class="px-4 py-3">Apellido</th>
                                        <th class="px-4 py-3">Celular</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($cliente as $cliente)
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 text-ms font-semibold border">{{$cliente->id}}</td>

                                        <td class="px-4 py-3 text-ms font-semibold border">{{$cliente->cedula}}</td>

                                        <td class="px-4 py-3 text-ms font-semibold border">{{$cliente->nombre}}</td>

                                        <td class="px-4 py-3 text-ms font-semibold border">{{$cliente->apellido}}</td>

                                        <td class="px-4 py-3 text-xs border">
                                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$cliente->celular}} </span>
                                        </td>

                                        <td class="px-4 py-3 text-ms font-semibold border">
                                            <div>
                                                <a class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300"
                                                href="{{route('cliente.show', $cliente->id)}}">
                                                    Editar
                                                </a>
                                            </div>

                                            <form action="{{ route('cliente.destroy', $cliente) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="p-1 pl-3 pr-3 bg-red-600 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300">
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
