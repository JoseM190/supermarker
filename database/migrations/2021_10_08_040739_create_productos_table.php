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
            $table->bigIncrements('idproducto');
            $table->unsignedBigInteger('categoriaid');
            $table->unsignedBigInteger('proveedorid');
            $table->string('nombre');
            $table->integer('cantidad');
            $table->string('unidad');
            $table->integer('precio');
            $table->integer('stock');
            $table->foreign('categoriaid')->references('idcategoria')->on('categorias');
            $table->foreign('proveedorid')->references('idproveedor')->on('proveedores');
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
