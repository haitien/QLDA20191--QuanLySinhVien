<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTaiKhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function($table) {
            $table->string('hoTen');
            $table->string('gioiTinh');
            $table->string('username')->unique();
            $table->primary('username');
            $table->string('password');
            $table->string('email');
            $table->string('chucVu');
            $table->string('sdt');
            $table->rememberToken();
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
        Schema::drop('taikhoan');
    }
}
