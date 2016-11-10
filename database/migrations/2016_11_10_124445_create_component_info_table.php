<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_info', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('state');

            $table->integer('component_id')->unsigned();
            $table->integer('info_id')->unsigned();

            $table->foreign('component_id')->references('id')->on('components');
            $table->foreign('info_id')->references('id')->on('infos');

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
        Schema::dropIfExists('component_info');
    }
}
