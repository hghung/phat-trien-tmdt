<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_nha')->nullable();
            $table->string('dien_tich');
            // ban đồ
            $table->string('dia_chi');
            $table->integer('rooms');
            $table->string('province');
            $table->double('lat');
            $table->double('lng');
            // 
            $table->integer('tinh_trang');
            $table->string('hinh_anh')->nullable();

            

            $table->integer('id_loainha')->unsigned();
            $table->foreign('id_loainha')
                    ->references('id')
                    ->on('loai_nha')
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
        Schema::dropIfExists('nha');
    }
}
