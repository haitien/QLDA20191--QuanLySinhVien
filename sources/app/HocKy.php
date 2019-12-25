<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocKy extends Model
{
    protected $table = 'hocky';
    public $timestamps = false;
    public function timTenHocPhan(){
    	////

    }

    public function lophoc() {
    	return $this->hasMany('App\LopHoc','maHocKy','maLop');
    }
}
