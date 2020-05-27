<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThanhVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanh_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kh_ma')->nullable();
            $table->string('kh_ten');
            $table->string('kh_ho');
            $table->string('kh_email');
            $table->string('kh_gioitinh');
            $table->integer('kh_cmnd');
            $table->string('kh_phone');

            $table->date('kh_birthday')->nullable();

            // địa chỉ
            $table->string('kh_province')->nullable();
            $table->string('kh_district')->nullable();
            $table->string('kh_ward')->nullable();
            $table->string('kh_address')->nullable();

            $table->string('kh_avatar')->nullable();



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
        Schema::dropIfExists('thanh_vien');
    }
}
