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
            $table->stirng('nv_cmnd');
            $table->stirng('nv_diachi');


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
