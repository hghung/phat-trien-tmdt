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
        Schema::create('bangtin_thuenha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_bangtin');
            $table->inther('gia_thue');
            $table->date('thoi_han');
            $table->date('thoigian_dangtin');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bangtin_thuenha');
    }
}
