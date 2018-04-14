<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaveregisters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_leavecategory_id')->unsigned();
            $table->timestamps();
            $table->foreign('employee_leavecategory_id')->references('id')->on('employee_leavecategory')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaveregisters');
    }
}
