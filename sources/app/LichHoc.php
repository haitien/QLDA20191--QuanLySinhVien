<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichHoc extends Model
{
    protected $table = 'lichhoc';
    protected $primaryKey = 'maLop';
    public $incrementing = false;
    public $timestamps = false;
    public function xemTKB(){
        ///
    }

    public function lophoc() {
    	return $this->belongsTo('App\LopHoc','maLop','maLop');
    }

    public function phonghoc() {
    	return $this->hasOne('App\PhongHoc','maPhong','maPhong');
    }
}
