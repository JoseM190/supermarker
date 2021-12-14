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
            $table->unsignedBigInteger('idcargo');
            $table->string('nombre_usuario');
            $table->string('apellido_usuario');
            $table->string('cedula_usuario');
            $table->integer('celular_usuario');
            $table->string('direccion_usuario');
            $table->string('correo_usuario');
            $table->string('contraseña_usuario');
            $table->string('estado_usuario');
            $table->foreign('idcargo')->references('idcargo')->on('cargos');
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
