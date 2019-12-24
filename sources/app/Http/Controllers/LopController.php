<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LopHoc;
use App\BangDiem;
use App\SinhVien;
use Illuminate\Support\Facades\Auth;
use App\CTDaoTao;
use App\Vien;
use App\LichHoc;
use App\DotDangKy;
use Carbon\Carbon;

class LopController extends Controller
{
    // Cán bộ - quản lý điểm
    public function getTimKiemDiemLop() {
        return view('canbo.qld.lop.timkiemlop');
    }
    public function postTimKiemDiemLop(Request $request) {
        $tukhoa = $request->tukhoa;
        $tieuchi = $request->tieuchi;
        $lophoc = LopHoc::where($tieuchi,'=',$tukhoa)->get();

        return view('canbo.qld.lop.timkiemlop',['lophoc'=>$lophoc]);

    }

    public function getXemDiemLop($maLop) {
    	$bangdiem = BangDiem::where('maLop','=',$maLop)->get();
        $lophoc = LopHoc::find($maLop);
        return view('canbo.qld.lop.xemdiemlop',['lophoc'=>$lophoc,'bangdiem'=>$bangdiem]);
    }

    public function postNhapDiem(Request $request, $maLop) {
    	$bangdiem = BangDiem::where('maLop','=',$maLop)->get();
        foreach($bangdiem as $sv) {
            if(!isset($sv->diemQT)) {
                $sv->diemQT = $request->input("diemQT-".$sv->maSV);
            }     
            if(!isset($sv->diemCK)) {
                $sv->diemCK = $request->input("diemCK-".$sv->maSV);
            }   
            $sv->diemChu = $sv->diemchu($sv->diemQT, $sv->diemCK, $sv->lophoc->hocphan->trongSo);
            $sv->save();  
        }
        
        return redirect('canbo/qld/lop/xemdiemlop/'.$maLop);
    }

    // cán bộ - quản lý đăng ký lớp
    public function getMoLop() {
        $ctdaotao = CTDaoTao::all();
        $vien = Vien::all();
        return view('canbo.qldkl.molop',['ctdt'=>$ctdaotao,'vien'=>$vien]);
    }

    public function postMoLop(Request $request) {
        $lophoc = new LopHoc;
        $lophoc->maHocPhan = $request->maHocPhan;
        $lophoc->soLuong = $request->soLuong;

        $lophoc->save();
        $lichhoc = new LichHoc;
        $lichhoc->tietDau = $request->tietDau;
        $lichhoc->tietCuoi = $request->tietCuoi;
        $lichhoc->thu = $request->thu;
        // $lichhoc->maPhong = $request->phongHoc;
        $lichhoc->save();

        return redirect('canbo/qldkl/molop');
    }


    public function getTimKiemLop() {
        return view('canbo.qldkl.timkiemlop');
    }
    public function postTimKiemLop(Request $request) {
        $tukhoa = $request->tukhoa;
        $tieuchi = $request->tieuchi;
        $lophoc = LopHoc::where($tieuchi,'=',$tukhoa)->get();

        return view('canbo.qldkl.timkiemlop',['lophoc'=>$lophoc]);

    }

    public function getCBXemLop($maLop) {
        $lophoc = LopHoc::find($maLop);
        $lich = LichHoc::where('maLop','=',$maLop)->get();
        $sl = BangDiem::where('maLop','=',$maLop)->count('id');
        return view('canbo.qldkl.xemlop',['lophoc'=>$lophoc,'sl'=>$sl,'lich'=>$lich]);
    }




    // sinh viên - quản lý đăng ký lớp

    public function getSVTimkiemLop() {
        return view('sinhvien.qldkl.timkiemlop');
    }

    public function postSVTimkiemLop(Request $request) {
        $tukhoa = $request->tukhoa;
        $tieuchi = $request->tieuchi;
        $lophoc = LopHoc::where($tieuchi,'=',$tukhoa)->get();

        return view('sinhvien.qldkl.timkiemlop',['lophoc'=>$lophoc]);
    }

    public function getSVXemLop($maLop) {
        $lophoc = LopHoc::find($maLop);
        $sl = BangDiem::where('maLop','=',$maLop)->count('id');
        $sv = SinhVien::where('username','=',Auth::user()->username)->first();
        $diem_sv = BangDiem::where('maSV','=',$sv->maSV)->where('maLop','=',$maLop)->first();
        return view('sinhvien.qldkl.xemlop',['lophoc'=>$lophoc,'sl'=>$sl,'diem_sv'=>$diem_sv]);
    }

    public function postDangKyLop($maLop) {
        $sv = SinhVien::where('username','=',Auth::user()->username)->first();
        $diem_sv = BangDiem::where('maSV','=',$sv->maSV)->where('maLop','=',$maLop)->first();
        if(!isset($diem_sv)) {
            $diem = new BangDiem;
            $diem->maSV = $sv->maSV;
            $diem->maLop = $maLop;
            $diem->save();
        }

        return redirect('sinhvien/qldkl/xemlop/'.$maLop);
    }

    public function getXemLopDK() {
        $sv = SinhVien::where('username','=',Auth::user()->username)->first();
        $lophoc = BangDiem::where('maSV','=',$sv->maSV)->get();

        return view('sinhvien.qldkl.xemlopdk',['lophoc'=>$lophoc]);
    }

    public function postHuyDangKy($maLop) {
        $sv = SinhVien::where('username','=',Auth::user()->username)->first();
        $diem_sv = BangDiem::where('maSV','=',$sv->maSV)->where('maLop','=',$maLop)->first();
        $diem_sv->delete();

        return redirect('sinhvien/qldkl/xemlopdk');
    }


    //admin - quản lý đợ đăng ký

    public function getQLDDK() {
        return view('admin.qlddk.qlddk');
    }

    public function postMoDotDK() {
        $DotDK = new DotDangKy;
        $DotDK->ngayBatDau = Carbon::now();
        $DotDK->save();
        return redirect('admin/qlddk');
    }

    public function postDongDotDK($maDot) {
        $DotDK = DotDangKy::find($maDot);
        $DotDK->ngayKetThuc = Carbon::now();
        $DotDK->save();
        return redirect('admin/qlddk');
    }
}
