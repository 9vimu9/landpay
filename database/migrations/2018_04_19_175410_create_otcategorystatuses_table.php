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
            
            $table->string('allow_clockin_ot')->nullable()->comment('if this allowed employees have OT before planned clockin');
            $table->string('allow_clockout_ot')->nullable()->comment('if this allowd employyes have OT after planned clockout');
            
            $table->integer('threshold')->nullable()->comment('minimum OT duration');

            $table->integer('interval_deduction_clockin_ot')->nullable();
            $table->string('interval_deduction_clockin_time')->nullable()->comment("if employee's actual clock in time is 'before' this time, specified interval time will deduct from OT hours ");

            $table->integer('interval_deduction_clockout_ot')->nullable();
            $table->string('interval_deduction_clockout_time')->nullable()->comment("if employee's actual clock out time is 'after' this time, specified interval time will deduct from OT hours ");

            $table->string('allow_fix_rate')->nullable();
            $table->double('ot_fix_rate',10,2)->nullable()->comment('fixed value of ot hour');
            $table->double('double_ot_fix_rate',10,2)->nullable()->comment('fixed value of double ot hour');;

            $table->string('week_day_double_ot_start_time')->nullable()->comment('time that start double ot at week days');

            $table->string('allow_double_ot_saturday')->nullable();
            $table->string('allow_double_ot_sunday')->nullable();
            $table->string('allow_double_ot_holiday')->nullable();

            $table->string('allow_ot_weekday')->nullable();
            $table->string('allow_ot_saturday')->nullable();
            $table->string('allow_ot_sunday')->nullable();
            $table->string('allow_ot_holiday')->nullable();

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
