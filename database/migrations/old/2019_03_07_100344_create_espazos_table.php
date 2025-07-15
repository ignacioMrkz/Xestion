<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEspazosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espazos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('enderezo');
            $table->string('postal');
            $table->string('localidade');
            $table->string('mapa');
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
        Schema::drop('espazos');
    }
}
