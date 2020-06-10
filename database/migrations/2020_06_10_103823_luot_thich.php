<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LuotThich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_thich', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                    ->references('id')
                    ->on('tai_khoan') // bảng csdl không phải models
                    ->onDelete('cascade');

            $table->integer('id_bangtin')->unsigned();
            $table->foreign('id_bangtin')
                    ->references('id')
                    ->on('bang_tin') // bảng csdl không phải models
                    ->onDelete('cascade');

            $table->boolean('like');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luot_thich');
    }
}
