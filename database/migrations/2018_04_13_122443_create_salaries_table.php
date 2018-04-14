<?php

use App\Salary;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('salary_type')->default(Salary::MONTHLY_SALARY)->comment('0=daily wage 1=monthly');
            $table->integer('employee_id')->unsigned();
            $table->integer('start_session_id')->unsigned();
            $table->timestamps();
            $table->foreign('start_session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
