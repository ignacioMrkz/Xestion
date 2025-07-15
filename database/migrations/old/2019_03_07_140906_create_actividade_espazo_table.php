<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadeEspazoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividade_espazo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividade_id')->unsigned();
            $table->foreign('actividade_id')->references('id')->on('actividades');
            $table->integer('espazo_id')->unsigned();
            $table->foreign('espazo_id')->references('id')->on('espazos');

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
        Schema::dropIfExists('actividade_espazo');
    }
}
