<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Producto
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
                                @foreach ($categorias as $categoria)
                                    @if ($categoria->idcategoria == $producto->categoriaid)
                                        Categoria: {{$categoria->nombre}}
                                    @endif
                                @endforeach
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                @foreach ($proveedores as $proveedor)
                                    @if ($proveedor->proveedor == $producto->proveedorid)
                                        Proveedor: {{$proveedor->nombre}}
                                    @endif
                                @endforeach
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                Nombre: {{$producto->nombre}}
                            </div>
                            <div class="text-sm mt-2">
                                <div
                                    class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                    Cantidad: {{$producto->cantidad}}
                                </div>
                                <div
                                    class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                    Unidad: {{$producto->unidad}}
                                </div>
                                <div
                                    class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                    Precio: {{$producto->precio}}
                                </div>
                                <div
                                    class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                    Stock: {{$producto->stock}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="{{ route('producto.index') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Volver
                </a>
                &nbsp&nbsp&nbsp
                <a href="{{ route('producto.edit', $producto) }}"
                    class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300">
                    Editar
                </a>
            </div>
        </div>
</x-app-layout>
