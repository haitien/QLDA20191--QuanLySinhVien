<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDotdangky extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotdangky', function(Blueprint $table) {
            $table->string('maDot')->unique();
            $table->primary('maDot');
            $table->string('maHocKy');
            $table->foreign('maHocKy')->references('maHocKy')->on('hocky');
            $table->string('ngayBatDau');
            $table->string('ngayKetThuc');
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
        Schema::drop('dotdangky');
    }
}
