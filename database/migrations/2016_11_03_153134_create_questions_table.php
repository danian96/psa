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
            $table->string('image')->nullable();

            $table->integer('management_id')->unsigned();
            $table->integer('area_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            
            $table->foreign('management_id')->references('id')->on('managements');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('subject_id')->references('id')->on('subjects');

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
