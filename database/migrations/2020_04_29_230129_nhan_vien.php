<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NhanVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nv_ma');
            $table->string('nv_hoten');
            $table->string('nv_cmnd');
            $table->string('nv_diachi');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                    ->references('id')
                    ->on('tai_khoan')
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
        Schema::dropIfExists('nhan_vien');
    }
}
