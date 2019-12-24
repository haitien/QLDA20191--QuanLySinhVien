<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBangdiemsv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangdiemsv', function(Blueprint $table) {
            $table->string('maLop');
            $table->primary('maLop');
            $table->string('maHocPhan');
            $table->string('tenHocPhan');
            $table->float('diemQT');
            $table->float('diemCK');
            $table->string('diemTBC');
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
        Schema::drop('bangdiemsv');
    }
}
