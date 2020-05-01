<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChiTietTaiSan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_tai_san', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('so_luong');

            $table->integer('id_taisan')->unsigned();
            $table->foreign('id_taisan')
                    ->references('id')
                    ->on('tai_san')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('chi_tiet_tai_san');
    }
}
