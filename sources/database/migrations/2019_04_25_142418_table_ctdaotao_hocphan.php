<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCtdaotaoHocphan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctdaotao_hocphan', function(Blueprint $table) {
            $table->string('maCT');
            $table->foreign('maCT')->references('maCT')->on('ctdaotao');
            $table->string('maHocPhan');
            $table->foreign('maHocPhan')->references('maHocPhan')->on('hocphan');
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
        Schema:drop('ctdaotao_hocphan');
    }
}
