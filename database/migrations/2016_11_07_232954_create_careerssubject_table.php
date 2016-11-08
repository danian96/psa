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

            $table->integer('id_career')->unsigned();
            $table->integer('id_subject')->unsigned();

            $table->foreign('id_career')->references('id')->on('careers');
            $table->foreign('id_subject')->references('id')->on('subjects');

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
