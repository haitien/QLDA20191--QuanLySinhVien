<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable

{
    use Notifiable;
    protected $table = 'taikhoan';
    protected $primaryKey = 'username';
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

    protected $fillable = [
         'hoTen', 'username', 'password'
    ];

    public function sinhvien() {
    	return $this->belongsTo('App\SinhVien','username','username');
    }

    public function getGioiTinh($value) {
        $gioiTinh ='';
        switch ($value) {
            case 0:
                $gioiTinh = 'Nam';
                break;
            case 1:
                $gioiTinh = 'Nữ';
                break;
            case 2:
                $gioiTinh = 'Khác';
                break;    
        };
        return $gioiTinh;
    }

    public function getChucVu($value) {
        $chucVu ='';
        switch ($value) {
            case 0:
                $chucVu = 'Sinh viên';
                break;
            case 1:
                $chucVu = 'Cán bộ';
                break;
            case 2:
                $chucVu = 'Admin';
                break;    
        };
        return $chucVu;
    }
}
