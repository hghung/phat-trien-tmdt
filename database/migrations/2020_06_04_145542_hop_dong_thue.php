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

            $table->string('user1_hoten')->nullable();
            $table->integer('user1_cmnd')->nullable();
            $table->integer('user1_phone')->nullable();
            $table->string('user1_email')->nullable();
            $table->string('user1_diachi')->nullable();

            $table->string('user2_hoten')->nullable();
            $table->integer('user2_cmnd')->nullable();
            $table->integer('user2_phone')->nullable();
            $table->string('user2_email')->nullable();
            $table->string('user2_diachi')->nullable();

            $table->string('ma_hopdong')->nullable();
            $table->string('ma_bangtin')->nullable();
            $table->string('ma_nha')->nullable();
            $table->integer('thoi_gianthue')->nullable();
            $table->date('time_start')->nullable();
            $table->date('time_end')->nullable();

            $table->string('ma_giaodich')->nullable();
            $table->dateTime('time_giao_dich')->nullable();
            $table->bigInteger('tien')->nullable();
            $table->string('card')->nullable();
            $table->string('loainha')->nullable();
            $table->integer('trang_thai')->nullable();


            $table->integer('id_thanhtoan')->unsigned()->nullable();
            $table->foreign('id_thanhtoan')
                    ->references('id')
                    ->on('phuong_thuc_thanh_toan')
                    ->onDelete('cascade');

            $table->integer('id_user1')->unsigned()->nullable();
            $table->foreign('id_user1')
                    ->references('id')
                    ->on('thanh_vien')
                    ->onDelete('cascade');
            
            $table->integer('id_user2')->unsigned()->nullable();
            $table->foreign('id_user2')
                    ->references('id')
                    ->on('thanh_vien')
                    ->onDelete('cascade');

            $table->integer('id_bangtin')->unsigned()->nullable();
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
