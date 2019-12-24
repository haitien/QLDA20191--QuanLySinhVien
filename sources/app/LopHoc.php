<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = 'lophoc';
    protected $primaryKey = 'maLop';
    public $incrementing = false;
    public $timestamps = false;

    public function bangdiem() {
    	return $this->hasMany('App\BangDiem','maLop','id');
    }

    public function hocky() {
    	return $this->belongsTo('App\HocKy','maHocKy','maHocKy');
    }

    public function hocphan() {
    	return $this->hasOne('App\HocPhan','maHocPhan','maHocPhan');
    }

    public function lichhoc() {
        return $this->hasMany('App\LichHoc','maLop','maLop');
    }

}
