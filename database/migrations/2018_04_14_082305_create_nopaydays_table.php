<?php

use App\Nopayday;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNopaydaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nopaydays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slip_id')->unsigned()->nullable();
            $table->date('date');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('status')->default(Nopayday::PENDING);
            $table->timestamps();
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
        Schema::dropIfExists('nopayleaves');
    }
}
