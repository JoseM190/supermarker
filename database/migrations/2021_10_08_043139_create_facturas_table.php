<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('idfactura');
            $table->unsignedBigInteger('idusuario');
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idventa');
            $table->date('fecha');
            $table->string('descripcion');
            $table->double('total');
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');
            $table->foreign('idcliente')->references('idcliente')->on('clientes');
            $table->foreign('idventa')->references('idventa')->on('ventas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
