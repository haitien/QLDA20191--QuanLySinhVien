<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableThongtinhoctap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinhoctap', function(Blueprint $table) {
            $table->string('maSV');
            $table->primary('maSV');
            $table->string('soTCTL');
            $table->string('diemTB');
            $table->string('trinhDo');
            $table->string('soTCNo');
            $table->string('soTCToiDa');
            $table->string('mucCC');
            $table->string('lyDoCC');
            $table->string('bangdiemSV');
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
        Schema::drop('thongtinhoctap');
    }
}
