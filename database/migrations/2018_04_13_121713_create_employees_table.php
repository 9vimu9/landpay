<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('id')->unsigned()->comment('fingerprint Id used as id')->unique();
            $table->string('name');
            $table->string('address',255);
            $table->string('address_temperary',255);
            $table->bigInteger('telephone_no_1');
            $table->bigInteger('telephone_no_2');
            $table->bigInteger('nic')->unique()->Nullable();
            $table->date('dob');//date of birth
            $table->date('date_joined');
            $table->integer('sessioncategory_id')->unsigned();
            $table->integer('otcategory_id')->unsigned();
            $table->integer('designation_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('sessioncategory_id')->references('id')->on('sessioncategories')->onDelete('cascade');
            $table->foreign('otcategory_id')->references('id')->on('otcategories')->onDelete('cascade');
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
