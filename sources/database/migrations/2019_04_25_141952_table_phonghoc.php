<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePhonghoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonghoc', function(Blueprint $table) {
            $table->string('maPhong')->unique();
            $table->primary('maPhong');
            $table->string('toaNha');
            $table->string('soPhong');
            $table->string('soBan');
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
        Schema::drop('phonghoc');
    }
}
