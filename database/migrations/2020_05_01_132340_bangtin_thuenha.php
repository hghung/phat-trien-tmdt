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
            $table->string('code_bangtin')->nullable();

            $table->string('ten_bangtin');
            $table->text('mo_ta');
            $table->integer('gia_thue');
            $table->integer('trang_thai');


            
            $table->integer('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')
                    ->references('id')
                    ->on('khach_hang')
                    ->onDelete('cascade');
            
            $table->integer('id_nha')->unsigned();
            $table->foreign('id_nha')
                    ->references('id')
                    ->on('nha')
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
        Schema::dropIfExists('bang_tin');
    }
}
