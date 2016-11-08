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
            $table->string('text');
            $table->string('image');

            $table->integer('id_exam')->unsigned();
            $table->integer('id_practice')->unsigned();
            $table->integer('id_management')->unsigned();
            
            $table->foreign('id_exam')->references('id')->on('exams');
            $table->foreign('id_practices')->references('id')->on('practices');
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
