<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopSV extends Model
{
    protected $table = 'lopsv';
    public $timestamps = false;
    public function xemTrangThai(){
        ///
    }

    public function sinhvien() {
    	return $this->hasMany('App\SinhVien','maLop','maLop');
    }

    public function ctdaotao() {
    	return $this->belongsTo('App\CTDaoTao','maCT','maCT');
    }

    public function vien() {
    	return $this->belongsTo('App\Vien','maVien','maVien');
    }
}
