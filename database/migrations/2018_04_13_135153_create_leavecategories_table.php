<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavecategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leavecategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('max_leave_days_per_year')->nullable()->unsigned();
            $table->integer('max_leave_days_per_month')->nullable()->unsigned();
            $table->integer('max_days_per_leave')->nullable()->unsigned();
            $table->integer('min_work_experiance')->nullable()->comment('minimun work experiance in months for get selectd leave category)');

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
        Schema::dropIfExists('leavecategories');
    }
}
