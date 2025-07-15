<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvaliacionmonitorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacionmonitors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('participantes');
            $table->integer('primeiravez');
            $table->integer('moza12');
            $table->integer('moza17');
            $table->integer('moza26');
            $table->integer('mozo12');
            $table->integer('mozo17');
            $table->integer('mozo26');
            $table->integer('valoracionespazo');
            $table->integer('valoracionmateriais');
            $table->integer('valoracionhorario');
            $table->integer('valoracionparticipacion');
            $table->integer('valoracionxeral');
            $table->integer('control');
            $table->text('obsevacions');
            $table->integer('actividade_id');
            $table->integer('espazo_id');
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
        Schema::drop('avaliacionmonitors');
    }
}
