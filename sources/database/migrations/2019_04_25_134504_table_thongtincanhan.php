<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableThongtincanhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtincanhan', function(Blueprint $table) {
            $table->string('maSV');
            $table->primary('maSV');
            $table->string('danToc');
            $table->string('tonGiao');
            $table->string('truongTHPT');
            $table->string('namTN');
            $table->string('soCMND');
            $table->string('diaChi');
            $table->string('hoKhau');
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
        Schema::drop('thongtincanhan');
    }
}
