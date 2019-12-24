<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBangdiemlop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangdiemlop', function(Blueprint $table) {
            $table->string('maSV');
            $table->primary('maSV');
            $table->string('hoTen');
            $table->string('tenLop');
            $table->float('diemQT');
            $table->float('diemCK');
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
        Schema::drop('bangdiemlop');
    }
}
