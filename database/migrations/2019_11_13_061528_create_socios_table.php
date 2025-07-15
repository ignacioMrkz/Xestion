<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSociosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('espazo');
            $table->integer('edicion');
            $table->integer('ano');
            $table->string('numero');
            $table->date('nacemento');
            $table->string('nome');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('enderezo');
            $table->string('localidade');
            $table->string('provincia');
            $table->string('postal');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('email');
            $table->boolean('aceptacion');
            $table->string('nome_titor');
            $table->string('dni_titor');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('socios');
    }
}
