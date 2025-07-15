<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacionmonitorMonitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacionmonitor_monitor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('avaliacionmonitor_id')->unsigned();
            $table->foreign('avaliacionmonitor_id')->references('id')->on('avaliacionmonitors');
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
        Schema::dropIfExists('avaliacionmonitor_monitor');
    }
}
