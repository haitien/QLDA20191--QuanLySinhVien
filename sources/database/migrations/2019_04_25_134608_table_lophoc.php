<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLophoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophoc', function(Blueprint $table) {
            $table->increments('maLop');
            $table->string('tenLop');
            $table->string('soLuong');
            $table->string('maHocPhan');
            $table->foreign('maHocPhan')->references('maHocPhan')->on('hocphan');
            $table->string('maHocKy');
            $table->foreign('maHocKy')->references('maHocKy')->on('hocky');
            $table->string('bangdiemLop');
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
        Schema::drop('lophoc');
    }
}
