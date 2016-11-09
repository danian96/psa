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

            $table->integer('exam_id')->unsigned();
            $table->integer('practice_id')->unsigned();
            $table->integer('management_id')->unsigned();
            
            $table->foreign('exam_id')->references('id')->on('exams');
            $table->foreign('practice_id')->references('id')->on('practices');
            $table->foreign('management_id')->references('id')->on('managements');
            
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
