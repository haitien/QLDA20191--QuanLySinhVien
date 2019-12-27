<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinhvien';
    protected $primaryKey = 'maSV';
    public $incrementing = false;
    public $timestamps = false;
    public function sinhvien(){
        ///
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
    
    public function diem() {
    	return $this->hasMany('App\BangDiem','maSV','id');
    }

    public function taikhoan() {
    	return $this->hasOne('App\TaiKhoan','username','username');
    }

    public function lopsv() {
    	return $this->belongsTo('App\LopSV','maLop','maLop');
    }

    public function lophoc() {
    	return $this->belongsToMany('App\LopHoc','maLop','maLop');
    }

    public function ttcanhan() {
        return $this->hasOne('App\ThongTinCaNhan','maSV','maSV');
    }

    public function tthoctap() {
        return $this->hasOne('App\ThongTinHocTap','maSV','maSV');
    }

    public function diemTBC($diem) {
        $diemTBC = $diem->diemQT*(1-$diem->lophoc->hocphan->trongSo) + $diemCK*$diem->lophoc->hocphan->trongSo;
        return $diemTBC;
    }

    public function getTCTichLuy($bangDiem) {
        $checked  = array();
        foreach($bangDiem as $diem) {
            $diemTBC = $diem->diemQT*(1-$diem->lophoc->hocphan->trongSo) + $diem->diemCK*$diem->lophoc->hocphan->trongSo;
            $arrayDiem = array('maHP'=>$diem->lophoc->maHocPhan,'soTC'=>$diem->lophoc->hocphan->soTC,'diemTBC'=>$diemTBC);
            if(!in_array($arrayDiem['maHP'], $checked)) {
                $arrayBD[] = $arrayDiem;
                $checked[] = $arrayDiem['maHP'];
            }
            else {
                foreach ($arrayBD as $_diem) {
                    if(($_diem['maHP'] == $arrayDiem['maHP']) && ($_diem['diemTBC'] < $diemTBC)) {
                        $index = array_search($_diem, $arrayBD);
                        unset($arrayBD[$index]);
                        $arrayBD[] = $arrayDiem;
                        
                    }
                }
            }
        }
        
        $soTCTichLuy = 0;
        foreach ($arrayBD as $diem) {
            $soTCTichLuy = $soTCTichLuy + $diem['soTC'];
        }
        return $soTCTichLuy;
    }

        public function getCPA($bangDiem) {
        $checked  = array();
        foreach($bangDiem as $diem) {
            $diemTBC = $diem->diemQT*(1-$diem->lophoc->hocphan->trongSo) + $diem->diemCK*$diem->lophoc->hocphan->trongSo;
            $arrayDiem = array('maHP'=>$diem->lophoc->maHocPhan,'soTC'=>$diem->lophoc->hocphan->soTC,'diemTBC'=>$diemTBC, 'diemChu'=>$diem->diemChu);
            if(!in_array($arrayDiem['maHP'], $checked)) {
                $arrayBD[] = $arrayDiem;
                $checked[] = $arrayDiem['maHP'];
            }
            else {
                foreach ($arrayBD as $_diem) {
                    if(($_diem['maHP'] == $arrayDiem['maHP']) && ($_diem['diemTBC'] < $diemTBC)) {
                        $index = array_search($_diem, $arrayBD);
                        unset($arrayBD[$index]);
                        $arrayBD[] = $arrayDiem;
                        
                    }
                }
            }
        }
        
        $CPA = 0;
        $soTCTichLuy = 0;
        foreach ($arrayBD as $diem) {
            $soTCTichLuy = $soTCTichLuy + $diem['soTC'];
            if($diem['diemChu'] == 'F') {
                $CPA = $CPA + $diem['soTC']*0;
            }
            if($diem['diemChu'] == 'D') {
                $CPA = $CPA + $diem['soTC']*1;
            }
            if($diem['diemChu'] == 'D+') {
                $CPA = $CPA + $diem['soTC']*1.5;
            }
            if($diem['diemChu'] == 'C') {
                 $CPA = $CPA + $diem['soTC']*2;
            }
            if($diem['diemChu'] == 'C+') {
                $CPA = $CPA + $diem['soTC']*2.5;
            }
            if($diem['diemChu'] == 'B') {
                $CPA = $CPA + $diem['soTC']*3;
            }
            if($diem['diemChu'] == 'B+') {
                $CPA = $CPA + $diem['soTC']*3.5;
            }
            if($diem['diemChu'] == 'A') {
                $CPA = $CPA + $diem['soTC']*4;
            }
            if($diem['diemChu'] == 'A+') {
                $CPA = $CPA + $diem['soTC']*4;
            }
        }
        $CPA = $CPA/$soTCTichLuy;
        return $CPA;
    }


    public function getTCNo($bangDiem) {
        $checked  = array();
        foreach($bangDiem as $diem) {
            $diemTBC = $diem->diemQT*(1-$diem->lophoc->hocphan->trongSo) + $diem->diemCK*$diem->lophoc->hocphan->trongSo;
            $arrayDiem = array('maHP'=>$diem->lophoc->maHocPhan,'soTC'=>$diem->lophoc->hocphan->soTC,'diemTBC'=>$diemTBC,'diemChu'=>$diem->diemChu);
            if(!in_array($arrayDiem['maHP'], $checked)) {
                $arrayBD[] = $arrayDiem;
                $checked[] = $arrayDiem['maHP'];
            }
            else {
                foreach ($arrayBD as $_diem) {
                    if(($_diem['maHP'] == $arrayDiem['maHP']) && ($_diem['diemTBC'] < $diemTBC)) {
                        $index = array_search($_diem, $arrayBD);
                        unset($arrayBD[$index]);
                        $arrayBD[] = $arrayDiem;
                        
                    }
                }
            }
        }
        
        $soTCNo = 0;
        foreach ($arrayBD as $diem) {
            if($diem['diemChu'] == 'F') {
                $soTCNo = $soTCNo + $diem['soTC'];
            }
        }
        return $soTCNo;
    }
}
