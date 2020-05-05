<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BangtinThuenha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_tin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_bangtin');
            $table->integer('gia_thue');
            $table->date('thoi_han');
            $table->date('thoigian_dangtin');

            $table->integer('id_nhanvien')->unsigned();
            $table->foreign('id_nhanvien')
                    ->references('id')
                    ->on('nhan_vien')
                    ->onDelete('cascade');
            
            $table->integer('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')
                    ->references('id')
                    ->on('khach_hang')
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
        Schema::dropIfExists('bang_tin');
    }
}
