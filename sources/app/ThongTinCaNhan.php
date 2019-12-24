<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongTinCaNhan extends Model
{
    protected $table = 'thongtincanhan';
    protected $primaryKey = 'maSV';
    public $incrementing = false;
    public $timestamps = false;

    public function sinhvien() {
    	return $this->belongsTo('App\SinhVien','maSV','maSV');
    }
}
