<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Usuarios
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
                    <form action="{{route('usuario.update', $usuario)}}" method="POST">
                        @csrf @method('PUT')
                        <br>
                        <label for="idcargo" class="text-sm font-medium text-gray-900 block mb-2">Cargo: </label>
                        <select name="idcargo" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach ($cargo as $cargo)
                                <option value="{{$cargo->idcargo}}">{{$cargo->nombre_cargo}}</option>
                            @endforeach
                        </select>
                        <div class="mb-6">
                            <label for="nombre_usuario" class="text-sm font-medium text-gray-900 block mb-2">Nombre: </label>
                            <input value=" {{old('nombre_usuario', $usuario->nombre_usuario)}} " type="text" id="nombre_usuario" name="nombre_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="apellido_usuario" class="text-sm font-medium text-gray-900 block mb-2">Apellido: </label>
                            <input value=" {{old('apellido_usuario', $usuario->apellido_usuario)}} " type="text" id="apellido_usuario" name="apellido_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="cedula_usuario" class="text-sm font-medium text-gray-900 block mb-2">Cedula: </label>
                            <input value=" {{old('cedula_usuario', $usuario->cedula_usuario)}} " type="text" id="cedula_usuario" name="cedula_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="celular_usuario" class="text-sm font-medium text-gray-900 block mb-2">Celular: </label>
                            <input value=" {{old('celular_usuario', $usuario->celular_usuario)}} " type="text" id="celular_usuario" name="celular_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="direccion_usuario" class="text-sm font-medium text-gray-900 block mb-2">Direccion: </label>
                            <input value=" {{old('direccion_usuario', $usuario->direccion_usuario)}} " type="text" id="direccion" name="direccion_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="correo_usuario" class="text-sm font-medium text-gray-900 block mb-2">Correo: </label>
                            <input value=" {{old('correo_usuario', $usuario->correo_usuario)}} " type="email" id="correo_usuario" name="correo_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="contraseña_usuario" class="text-sm font-medium text-gray-900 block mb-2">Contraseña: </label>
                            <input value=" {{old('contraseña_usuario', $usuario->contraseña_usuario)}} " type="password" id="contraseña_usuario" name="contraseña_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <label for="estado_usuario" class="text-sm font-medium text-gray-900 block mb-2">
                            Estado:
                            <br>
                        </label>
                        <div class="flex items-center mb-5">
                            <select name="estado_usuario" class=" bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="activo">Activo</option>
                                <option value="inactivo">Inactivo</option>
                            </select>
                        </div>
                        <div style="text-align: center;">
                            <a href="{{ route('usuario.index') }}"
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
