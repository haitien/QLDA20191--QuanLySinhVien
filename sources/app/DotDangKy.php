<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DotDangKy extends Model
{
    protected $table = 'dotdangky';
    public $timestamps = false;
    protected $primaryKey = 'maDot';
    public $chophep = true;

    public function chophep() {
    	return $this->chophep;
    }
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
public function timMahocPhan(){
    ///
}
    public function modk() {
    	return 
    }
}
