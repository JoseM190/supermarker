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
            $table->id('id');
            $table->unsignedBigInteger('idusuario');
            $table->unsignedBigInteger('idclientes');
            $table->unsignedBigInteger('idventa');
            $table->date('fecha');
            $table->string('descripcion');
            $table->double('total');
            $table->foreign('idusuario')->references('id')->on('usuarios');
            $table->foreign('idclientes')->references('id')->on('clientes');
            $table->foreign('idventa')->references('id')->on('ventas');
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
