<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadSlipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dad_slip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dad_id')->unsigned();
            $table->integer('slip_id')->unsigned();
            $table->timestamps();
            $table->decimal('value', 10, 2);

            $table->foreign('dad_id')->references('id')->on('dads')->onDelete('cascade');
            $table->foreign('slip_id')->references('id')->on('slips')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dad_slip');
    }
}
