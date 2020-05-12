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
            $table->string('kh_ma')->nullable();
            $table->string('kh_ten');
            $table->string('kh_ho');
            $table->string('kh_email');
            $table->string('kh_gioitinh');
            $table->date('kh_birthday');




            $table->string('kh_diachi');
            $table->integer('kh_cmnd');
            $table->string('kh_phone');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                    ->references('id')
                    ->on('tai_khoan')
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
        Schema::dropIfExists('khach_hang');
    }
}
