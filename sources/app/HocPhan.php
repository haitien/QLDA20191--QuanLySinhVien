<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocPhan extends Model
{
    protected $table = 'hocphan';
    public $timestamps = false;
    public $timestamps = false;

    public function lophoc() {
    	return $this->belongsTo('App\LopHoc','maHocPhan','maLop');
    }

     public function vien() {
    	return $this->belongsTo('App\Vien','maVien','maVien');
    }
}
