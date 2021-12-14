<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categorias
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-lg mx-auto">
                    <div class="bg-blue w-full p-8 flex justify-center font-sans">
                        <div class="text-sm mt-2">
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                Nombre: {{$categoria->nombre}}
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                Pasillo: {{$categoria->pasillo}}
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                Estado: {{$categoria->estado}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="{{ route('categoria.index') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Volver
                </a>
                &nbsp&nbsp&nbsp
                <a href="{{ route('categoria.edit', $categoria) }}"
                    class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300">
                    Editar
                </a>
            </div>
        </div>
</x-app-layout>
