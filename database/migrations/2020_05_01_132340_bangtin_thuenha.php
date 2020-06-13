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
            $table->integer('views')->nullable();



            
            $table->integer('id_thanhvien')->unsigned();
            $table->foreign('id_thanhvien')
                    ->references('id')
                    ->on('thanh_vien')
                    ->onDelete('cascade');
            
            $table->integer('id_nha')->unsigned();
            $table->foreign('id_nha')
                    ->references('id')
                    ->on('nha')
                    ->onDelete('cascade');


            // khôi phục tệp tin bị xoa
            $table->softDeletes();

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
