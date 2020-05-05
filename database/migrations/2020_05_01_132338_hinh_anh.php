<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HinhAnh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hinh_anh');

            $table->integer('id_nha')->unsigned();
            $table->foreign('id_nha')
                    ->references('id')
                    ->on('nha')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinh_anh');
    }
}
