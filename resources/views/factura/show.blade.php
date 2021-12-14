<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Factura
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
                                @foreach ($usuarios as $usuario)
                                    @if ($usuario->idusuario == $factura->usuarioid)
                                        Usuario: {{$usuario->nombre}}
                                    @endif
                                @endforeach
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                @foreach ($clientes as $cliente)
                                    @if ($cliente->clientesid == $factura->idcliente)
                                    cliente: {{$cliente->nombre}}
                                    @endif
                                @endforeach
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                @foreach ($ventas as $venta)
                                    @if ($venta->ventaid == $factura->idventa)
                                    venta: {{$venta->nombre}}
                                    @endif
                                @endforeach
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                Fecha: {{$factura->fecha}}
                            </div>
                            <div class="text-sm mt-2">
                                <div
                                    class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                    Descripcion: {{$factura->descripcion}}
                                </div>
                                <div
                                    class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                    Total: {{$factura->total}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="{{ route('factura.index') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Volver
                </a>
                &nbsp&nbsp&nbsp
                <a href="{{ route('factura.edit', $factura) }}"
                    class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300">
                    Editar
                </a>
            </div>
        </div>
</x-app-layout>
