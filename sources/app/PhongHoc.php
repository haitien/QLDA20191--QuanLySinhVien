<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongHoc extends Model
{
    protected $table = 'phonghoc';
    public $timestamps = false;
    public function xemPhongHoc(){
    	//
    }

        public function lichhoc() {
    	return $this->belongsTo('App\LichHoc','maPhong');
    }
}
