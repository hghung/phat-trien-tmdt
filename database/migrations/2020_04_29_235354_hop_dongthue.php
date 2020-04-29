<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HopDongthue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_dongthue', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_hopdong');
            $table->dateTime('time_start');
            $table->dateTime('time_end');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hop_dongthue');
    }
}
