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
            $table->bigIncrements('idfactura');
            $table->unsignedBigInteger('usuarioid');
            $table->unsignedBigInteger('clientesid');
            $table->unsignedBigInteger('ventaid');
            $table->date('fecha');
            $table->string('descripcion');
            $table->integer('total');
            $table->foreign('usuarioid')->references('idusuario')->on('usuarios');
            $table->foreign('clientesid')->references('idcliente')->on('clientes');
            $table->foreign('ventaid')->references('idventa')->on('ventas');
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
