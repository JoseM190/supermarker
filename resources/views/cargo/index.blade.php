<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cargos
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('cargo.create') }}"
                    class="p-2 pl-5 pr-5 bg-indigo-500 text-gray-100 text-lg rounded-lg focus:border-4 border-indigo-300">
                    Registrar Cargo
                </a>
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Id</th>
                                        <th class="px-4 py-3">Nombre del Cargo</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($cargo as $cargo)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$cargo->idcargo}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$cargo->nombre_cargo}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border" style="text-align: center;">
                                                <div>
                                                    <a class="p-1 pl-3 pr-3 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-30"
                                                        href="{{route('cargo.show', $cargo->idcargo)}}">
                                                        Editar
                                                    </a>
                                                </div>
                                                <br>
                                                <form action="{{ route('cargo.destroy', $cargo->idcargo) }}" method="POST">
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
