<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->time('start_time');
            $table->integer('start_day')->default(1)->comment('eka dawasakata wada yana template ekaka block eke start time eka mona dawsadea yana eka identify karanna');
            $table->time('end_time');
            $table->integer('end_day')->default(1);
             $table->integer('template_id')->unsigned();

            $table->timestamps();
            $table->foreign('template_id')->references('id')->on('templates')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
