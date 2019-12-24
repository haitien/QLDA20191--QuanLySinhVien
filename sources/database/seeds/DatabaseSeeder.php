<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taikhoan')->insert([
        	'hoTen'=>'Nguyễn An Khang',
        	'username'=>'canbo',
        	'email' => 'abc@gmail.com',
        	'chucVu'=>'Cán bộ',
        	'gioiTinh'=>'Nam',
        	'sdt'=>'123456789',
        	'password'=>bcrypt('12345678')
        ]);
    }
}
