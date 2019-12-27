<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = 'lophoc';
    protected $primaryKey = 'maLop';
    public $incrementing = false;
    public $timestamps = false;
 public function diemchu($diemqt, $diemck, $trongso) {
        $diemchu = $diemqt*(1-$trongso) + $diemck*$trongso;
        if($diemchu<4 OR $diemqt<3 OR $diemck <3) {
            return 'F';
        } elseif($diemchu<5) {
             $diem = 'D';
        }   elseif ($diemchu<5.5) {
                $diem = 'D+';
        }   elseif ($diemchu<6.5) {
                $diem = 'C';
        }   elseif ($diemchu<7) {
                $diem = 'C+';
        }   elseif ($diemchu<8) {
                $diem = 'B';
        }   elseif ($diemchu<8.5) {
                $diem = 'B+';
        }   elseif ($diemchu<9.5) {
                $diem = 'A';
        }   else {
                $diem = 'A+';
        }
        return $diem;
    }
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
