<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableHocphan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocphan', function(Blueprint $table) {
            $table->string('maHocPhan')->unique();
            $table->primary('maHocPhan');
            $table->string('tenHocPhan');
            $table->string('maVien');
            $table->foreign('maVien')->references('maVien')->on('vien');
            $table->integer('soTC');
            $table->string('trongSo');
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
        Schema::drop('hocphan');
    }
}
