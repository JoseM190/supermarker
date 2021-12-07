<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idcategoria');
            $table->unsignedBigInteger('idproveedor');
            $table->string('nombre');
            $table->integer('cantidad');
            $table->string('unidad');
            $table->double('precio');
            $table->integer('stock');
            $table->foreign('idcategoria')->references('id')->on('categorias');
            $table->foreign('idproveedor')->references('id')->on('proveedores');
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
        Schema::dropIfExists('productos');
    }
}
