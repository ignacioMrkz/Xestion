<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvaliacionsatisfacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacionsatisfacions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('xenero');
            $table->boolean('idade12');
            $table->boolean('idade17');
            $table->boolean('idade26');
            $table->string('concello');
            $table->string('estado');
            $table->string('motivacion');
            $table->string('encontrou');
            $table->integer('monitores');
            $table->integer('espazo');
            $table->integer('materiais');
            $table->integer('horario');
            $table->integer('xeral');
            $table->text('falta');
            $table->text('suxerencias');
            $table->integer('actividade_id');
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
        Schema::drop('avaliacionsatisfacions');
    }
}
