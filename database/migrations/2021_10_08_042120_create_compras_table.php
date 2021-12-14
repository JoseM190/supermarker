<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('idcompra');
            $table->unsignedBigInteger('usuarioid');
            $table->unsignedBigInteger('proveedorid');
            $table->unsignedBigInteger('productoid');
            $table->date('fecha');
            $table->string('descripcion');
            $table->string('unidad');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('subtotal');
            $table->integer('total');
            $table->foreign('usuarioid')->references('idusuario')->on('usuarios');
            $table->foreign('proveedorid')->references('idproveedor')->on('proveedores');
            $table->foreign('productoid')->references('idproducto')->on('productos');
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
        Schema::dropIfExists('compras');
    }
}
