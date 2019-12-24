<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLopsv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lopsv', function(Blueprint $table) {
            $table->string('maLop')->unique();
            $table->primary('maLop');
            $table->string('tenLop');
            $table->string('soLuong');
            $table->string('khoaHoc');
            $table->string('maCT');
            $table->foreign('maCT')->references('maCT')->on('ctdaotao');
            $table->string('maVien');
            $table->foreign('maVien')->references('maVien')->on('vien');
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
        Schema::drop('lopsv');
    }
}
