<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadeMonitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividade_monitor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividade_id')->unsigned();
            $table->foreign('actividade_id')->references('id')->on('actividades');
            $table->integer('monitor_id')->unsigned();
            $table->foreign('monitor_id')->references('id')->on('monitors');
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
        Schema::dropIfExists('actividade_monitor');
    }
}
