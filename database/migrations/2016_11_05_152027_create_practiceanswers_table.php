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

            $table->integer('practice_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->integer('option_id')->unsigned();
            
            $table->foreign('practice_id')->references('id')->on('practices');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('option_id')->references('id')->on('options');
            
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
