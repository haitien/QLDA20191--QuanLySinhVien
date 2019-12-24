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
