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
            $table->id('id');
            $table->unsignedBigInteger('idusuario');
            $table->unsignedBigInteger('idproveedor');
            $table->unsignedBigInteger('idproducto');
            $table->date('fecha');
            $table->string('descripcion');
            $table->string('unidad');
            $table->integer('cantidad');
            $table->double('precio');
            $table->double('subtotal');
            $table->double('total');
            $table->foreign('idusuario')->references('id')->on('usuarios');
            $table->foreign('idproveedor')->references('id')->on('proveedores');
            $table->foreign('idproducto')->references('id')->on('productos');
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
