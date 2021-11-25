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
            $table->id('idusuario');
            $table->unsignedBigInteger('idcargo');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula',12);
            $table->integer('celular',8);
            $table->string('direccion');
            $table->string('correo')->nullable();
            $table->string('contraseña');
            $table->string('estado',1);
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
