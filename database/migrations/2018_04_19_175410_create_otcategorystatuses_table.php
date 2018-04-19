<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtcategorystatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otcategorystatuses', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('otcategory_id')->unsigned();
            
            $table->boolean('allow_clockin_ot')->nullable();
            $table->boolean('allow_clockout_ot')->nullable();
            
            $table->integer('threshold')->nullable();

           
            $table->integer('interval_deduction_clockin_ot')->nullable();
            $table->time('interval_deduction_clockin')->nullable()->comment("employee's clock in time for interval deduction");

            $table->integer('interval_deduction_clockout_ot')->nullable();
            $table->time('interval_deduction_clockout')->nullable();

            $table->boolean('allow_fix_rate')->nullable();
            $table->double('ot_fix_rate',10,2);
            $table->double('double_ot_fix_rate',10,2);

            $table->time('week_day_double_ot_start_time')->nullable();

            $table->boolean('allow_double_ot_saturday')->nullable();
            $table->boolean('allow_double_ot_sunday')->nullable();
            $table->boolean('allow_double_ot_holiday')->nullable();

            $table->boolean('allow_ot_weekday')->nullable();
            $table->boolean('allow_ot_saturday')->nullable();
            $table->boolean('allow_ot_sunday')->nullable();
            $table->boolean('allow_ot_holiday')->nullable();



            $table->timestamps();

            $table->foreign('otcategory_id')->references('id')->on('otcategories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otcategorystatuses');
    }
}
