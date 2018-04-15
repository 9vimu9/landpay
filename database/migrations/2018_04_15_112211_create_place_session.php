<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceSession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_session', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->timestamps();

            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_session');
    }
}
