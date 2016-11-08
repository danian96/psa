<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentsinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componentsinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('state');

            $table->integer('id_component')->unsigned();
            $table->integer('id_info')->unsigned();

            $table->foreign('id_component')->references('id')->on('components');
            $table->foreign('id_info')->references('id')->on('infos');

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
        Schema::dropIfExists('componentsinfo');
    }
}
