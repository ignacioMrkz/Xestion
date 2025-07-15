<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacionsatifacionMonitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacionsatifacion_monitor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('avaliacionsatifacion_id')->unsigned();
            $table->foreign('avaliacionsatifacion_id')->references('id')->on('avaliacionsatifacions');
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
        Schema::dropIfExists('avaliacionsatifacion_monitor');
    }
}
