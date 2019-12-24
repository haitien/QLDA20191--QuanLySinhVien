<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSinhvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhvien', function(Blueprint $table) {
            $table->string('maSV')->unique();
            $table->primary('maSV');
            $table->string('username');
            $table->foreign('username')->references('username')->on('taikhoan');
            $table->string('maLop');
            $table->foreign('maLop')->references('maLop')->on('lopsv');
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
        Schema::drop('sinhvien');
    }
}
