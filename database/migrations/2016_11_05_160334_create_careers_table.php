<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            
            $table->integer('faculty_id')->unsigned();
            $table->integer('component_id')->unsigned();

            $table->foreign('faculty_id')->references('id')->on('faculties');
            $table->foreign('component_id')->references('id')->on('components');

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
        Schema::dropIfExists('careers');
    }
}
