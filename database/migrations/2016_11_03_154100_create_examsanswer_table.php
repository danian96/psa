<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsanswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examsanswer', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('id_exam')->unsigned();
            $table->integer('id_question')->unsigned();
            $table->integer('id_option')->unsigned();

            $table->foreign('id_exam')->references('id')->on('exams');
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
        Schema::dropIfExists('examsanswer');
    }
}
