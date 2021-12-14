<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Usuarios
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('usuario.create') }}"
                    class="p-2 pl-5 pr-5 bg-indigo-500 text-gray-100 text-lg rounded-lg focus:border-4 border-indigo-300">
                    Registrar Usuario
                </a>
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Id</th>
                                        <th class="px-4 py-3">Cargo</th>
                                        <th class="px-4 py-3">Nombre</th>
                                        <th class="px-4 py-3">Apellido</th>
                                        <th class="px-4 py-3">Cedula</th>
                                        <th class="px-4 py-3">Celular</th>
                                        <th class="px-4 py-3">Direccion</th>
                                        <th class="px-4 py-3">Correo</th>
                                        <th class="px-4 py-3">Contraseña</th>
                                        <th class="px-4 py-3">Estado</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($usuario as $usuario)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$usuario->idusuario}}</td>
                                            <td class="px-4 py-3 text-xs border">
                                                <span class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-200 rounded-sm">
                                                    {{$usuario->idcargo}}
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$usuario->nombre_usuario}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$usuario->apellido_usuario}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$usuario->cedula_usuario}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$usuario->celular_usuario}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$usuario->direccion_usuario}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$usuario->correo_usuario}}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{$usuario->contraseña_usuario}}</td>
                                            @if($usuario->estado_usuario == 'activo')
                                                <td class="px-4 py-3 text-xs border">
                                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$usuario->estado_usuario}} </span>
                                                </td>
                                            @else
                                                <td class="px-4 py-3 text-xs border">
                                                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> {{$usuario->estado_usuario}} </span>
                                                </td>
                                            @endif
                                            <td class="px-4 py-3 text-ms font-semibold border" style="text-align: center;">
                                                <div>
                                                    <a class="p-1 pl-3 pr-3 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-30"
                                                        href="{{route('usuario.show', $usuario->idusuario)}}">
                                                        Editar
                                                    </a>
                                                </div>
                                                <br>
                                                <form action="{{ route('usuario.destroy', $usuario->idusuario) }}" method="POST">
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
