<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LoaiNha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_nha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_loai');

            // $table->integer('level')->unsigned();
            // $table->foreign('level')
            //         ->references('id')
            //         ->on('Role')
            //         ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai_nha');
    }
}
