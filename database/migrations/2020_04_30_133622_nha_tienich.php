<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NhaTienich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nha_tienich', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('check');

            $table->integer('id_tienich')->unsigned();
            $table->foreign('id_tienich')
                    ->references('id')
                    ->on('tien_ich')
                    ->onDelete('cascade');

            $table->integer('id_nha')->unsigned();
            $table->foreign('id_nha')
                    ->references('id')
                    ->on('nha')
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
        Schema::dropIfExists('nha_tienich');
    }
}
