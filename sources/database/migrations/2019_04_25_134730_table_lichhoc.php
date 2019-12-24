<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLichhoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichhoc', function(Blueprint $table) {
            $table->integer('tietDau');
            $table->integer('tietCuoi');
            $table->string('maPhong');
            $table->foreign('maPhong')->references('maPhong')->on('phonghoc');
            $table->integer('maLop')->unsigned();
            $table->foreign('maLop')->references('maLop')->on('lophoc');
            $table->timestamp('create_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lichhoc');
    }
}
