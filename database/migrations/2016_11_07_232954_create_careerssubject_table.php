<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerssubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careerssubject', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weighing');

            $table->integer('career_id')->unsigned();
            $table->integer('subject_id')->unsigned();

            $table->foreign('career_id')->references('id')->on('careers');
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
        Schema::dropIfExists('careerssubject');
    }
}
