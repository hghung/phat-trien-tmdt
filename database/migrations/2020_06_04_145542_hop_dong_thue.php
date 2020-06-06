<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HopDongThue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_dong_thue', function (Blueprint $table) {
            $table->increments('id');

            $table->string('user1_hoten');
            $table->integer('user1_cmnd');
            $table->integer('user1_phone');
            $table->string('user1_email');
            $table->string('user1_diachi');

            $table->string('user2_hoten');
            $table->integer('user2_cmnd');
            $table->integer('user2_phone');
            $table->string('user2_email');
            $table->string('user2_diachi');

            $table->string('ma_hopdong')->nullable();
            $table->string('ma_bangtin');
            $table->string('ma_nha');
            $table->integer('thoi_gianthue');
            $table->date('time_start');
            $table->date('time_end');

            $table->string('ma_giaodich');
            $table->dateTime('time_giao_dich');
            $table->bigInteger('tien');
            $table->string('card');
            $table->string('loainha');

            $table->integer('id_thanhtoan')->unsigned();
            $table->foreign('id_thanhtoan')
                    ->references('id')
                    ->on('phuong_thuc_thanh_toan')
                    ->onDelete('cascade');

            $table->integer('id_user1')->unsigned();
            $table->foreign('id_user1')
                    ->references('id')
                    ->on('thanh_vien')
                    ->onDelete('cascade');
            
            $table->integer('id_user2')->unsigned();
            $table->foreign('id_user2')
                    ->references('id')
                    ->on('thanh_vien')
                    ->onDelete('cascade');

            $table->integer('id_bangtin')->unsigned();
            $table->foreign('id_bangtin')
                    ->references('id')
                    ->on('bang_tin')
                    ->onDelete('cascade');


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
        Schema::dropIfExists('hop_dong_thue');
    }
}
