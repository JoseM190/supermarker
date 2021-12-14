<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('idusuario');
            $table->unsignedBigInteger('cargoid');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->integer('celular');
            $table->string('direccion');
            $table->string('correo');
            $table->string('contraseña');
            $table->string('estado');
            $table->foreign('cargoid')->references('idcargo')->on('cargos');
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
        Schema::dropIfExists('usuarios');
    }
}
