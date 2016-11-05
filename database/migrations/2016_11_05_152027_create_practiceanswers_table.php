<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeanswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practiceanswers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_practice')->unsigned();
            $table->integer('id_question')->unsigned();
            $table->integer('id_option')->unsigned();
            $table->foreign('id_practice')->references('id')->on('practices');
            $table->foreign('id_question')->references('id')->on('questions');
            $table->foreign('id_option')->references('id')->on('options');
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
        Schema::dropIfExists('practiceanswers');
    }
}
