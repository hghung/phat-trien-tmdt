<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kh_hoten');
            $table->string('kh_diachi');
            $table->integer('kh_cmnd');
            $table->string('kh_phone');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                    ->references('id')
                    ->on('Role')
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
        Schema::dropIfExists('khach_hang');
    }
}
