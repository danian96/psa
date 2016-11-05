<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->enum('questionType', ['OPENED', 'CLOSED']);
            $table->text('text');
            $table->integer('id_exam')->unsigned();
            $table->integer('id_area')->unsigned();
            $table->integer('id_question')->unsigned();
            $table->integer('id_management')->unsigned();
            $table->foreign('id_exam')->references('id')->on('exams');
            $table->foreign('id_area')->references('id')->on('areas');
            $table->foreign('id_question')->references('id')->on('questions');
            $table->foreign('id_management')->references('id')->on('managements');
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
        Schema::dropIfExists('questions');
    }
}
