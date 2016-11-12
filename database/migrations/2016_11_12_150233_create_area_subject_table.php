<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_subject', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('area_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            
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
        Schema::dropIfExists('area_subject');
    }
}
