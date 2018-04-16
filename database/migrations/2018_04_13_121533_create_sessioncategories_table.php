<?php

use App\Salary;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessioncategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessioncategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('intervel')->comment('in weeks')->unsigned();
            $table->string('salary_type')->default(Salary::MONTHLY_SALARY)->comment('0=daily wage 1=monthly');
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
        Schema::dropIfExists('sessioncategories');
    }
}
