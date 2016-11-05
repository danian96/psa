<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facultiesarea', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weighing')->unsigned();
            $table->integer('id_faculty')->unsigned();
            $table->integer('id_area')->unsigned();
            $table->timestamps();
            $table->foreign('id_area')->references('id')->on('areas');
            $table->foreign('id_faculty')->references('id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facultiesarea');
    }
}
