<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableHocky extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocky', function(Blueprint $table) {
            $table->string('maHocKy')->unique();
            $table->primary('maHocKy');
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
        Schema::drop('hocky');
    }
}
