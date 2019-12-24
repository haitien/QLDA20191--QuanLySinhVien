<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\BangDiem;
use App\TaiKhoan;
use App\ThongTinCaNhan;
use App\CTDaoTao;
use App\Vien;
use App\LopSV;
use Illuminate\Support\Facades\Auth;

class SinhVienController extends Controller
{

    // cán bộ - điểm sinh viên
    public function getTimKiemDiemSV() {
        return view('canbo.qld.sv.timkiemsv');
    }
    public function postTimKiemDiemSV(Request $request) {
        $tukhoa = $request->tukhoa;
        $tieuchi = $request->tieuchi;
        $sinhvien = SinhVien::where($tieuchi,'=',$tukhoa)->get();
        // switch ($tieuchi) {
        //     case 'maSV':
                
        //         break;
        //     case 'hoTen':
        //         $sinhvien = TaiKhoan::where(['chucVu'=>'Sinh viên','hoTen'=>$tukhoa])->get();
        //         break;
        //     case 'maLop':
        //         $sinhvien = SinhVien::where('maLop','=',$tukhoa)->get();
        //         break;
        // }
            
        return view('canbo.qld.sv.timkiemsv',['sinhvien'=>$sinhvien]);  

    }

    public function getXemDiemSV($maSV) {
        $bangdiem = BangDiem::where('maSV','=',$maSV)->get();
        $sv = SinhVien::find($maSV);
        return view('canbo.qld.sv.xemdiemsv',['sv'=>$sv,'bangdiem'=>$bangdiem]);
    }


    public function postSuaDiemQT(Request $request, $maSV, $id) {
        $this->validate($request,
            [
                'diemQT'=>'required|numeric'
            ],
            [
                'diemQT.required'=>'Bạn chưa nhập điểm',
                'diemQT.numeric'=>'Điểm phải là số'
            ]);
        $diem = BangDiem::find($id);
        $diem->diemQT = $request->diemQT;
        $diem->diemChu = $diem->diemchu($diem->diemQT,$diem->diemCK,$diem->lophoc->hocphan->trongSo);
        $diem->save();

        return redirect('canbo/qld/sv/xemdiemsv/'.$maSV);
    }
    public function postSuaDiemCK(Request $request, $maSV, $id) {
        $this->validate($request,
            [
                'diemCK'=>'required|numeric'
            ],
            [
                'diemCK.required'=>'Bạn chưa nhập điểm',
                'diemCK.numeric'=>'Điểm phải là số'
            ]);
        $diem = BangDiem::find($id);
        $diem->diemCK = $request->diemCK;
        $diem->diemChu = $diem->diemchu($diem->diemQT,$diem->diemCK,$diem->lophoc->hocphan->trongSo);
        $diem->save();

        return redirect('canbo/qld/sv/xemdiemsv/'.$maSV);
    }


// sinh viên - hồ sơ cá nhân
     public function getXemHSCN() {
        $sinhvien = Auth::user();
        return view('sinhvien.qlhscn.xemhscn', ['sv'=>$sinhvien]);
    }

    public function getSuaHSCN() {
        $sinhvien = Auth::user();
        return view('sinhvien.qlhscn.suahscn', ['sv'=>$sinhvien]);
    }
    public function postSuaHSCN(Request $request) {
        $sinhvien = Auth::user();
        $ttcanhan = ThongTinCaNhan::find(Auth::user()->sinhvien->maSV);
        // $this->validate($request, 
        //     [
        //         'diaChi' => 'required',
        //         'tonGiao' => 'required',
        //         'truongTHPT' => 'required',
        //         'hoKhau' => 'required'
        //     ], 
        //     [
        //         'diaChi.required' => 'Bạn chưa nhập địa chỉ',
        //         'tonGiao.required' => 'Bạn chưa nhập tôn giáo' ,
        //         'truongTHPT.required' => 'Bạn chưa nhập trường THPT' ,
        //         'hoKhau.required' => 'Bạn chưa nhập hộ khẩu'
        //     ]);
        // $sinhvien->diaChi = $request->diaChi;
        // $sinhvien->tonGiao = $request->tonGiao;
        // $sinhvien->truongTHPT = $request->truongTHPT;
        // $sinhvien->hoKhau = $request->hoKhau;

        $sinhvien->hoTen = $request->hoTen;
        $sinhvien->gioiTinh = $request->gioiTinh;
        $ttcanhan->danToc = $request->danToc;
        $ttcanhan->namTN = $request->namTN;
        $ttcanhan->diaChi = $request->diaChi; 
        $ttcanhan->soCMND = $request->soCMND; 
        $ttcanhan->tonGiao = $request->tonGiao;
        $ttcanhan->truongTHPT = $request->truongTHPT;
        $ttcanhan->hoKhau = $request->hoKhau; 
        $sinhvien->sdt = $request->sdt;
        
        $sinhvien->save();  
        $ttcanhan->save();

        return redirect('sinhvien/qlhscn/suahscn')->with('thongbao','Sửa thành công');  
    }


// Cán bộ - hồ sơ sinh viên
    public function getTimKiemHSSV() {
        return view('canbo.qlhssv.timkiemsv');
    }
    public function postTimKiemHSSV(Request $request) {
        $tukhoa = $request->tukhoa;
        $tieuchi = $request->tieuchi;
        $sinhvien = SinhVien::where($tieuchi,'=',$tukhoa)->get();
        // switch ($tieuchi) {
        //     case 'maSV':
                
        //         break;
        //     case 'hoTen':
        //         $sinhvien = TaiKhoan::where(['chucVu'=>'Sinh viên','hoTen'=>$tukhoa])->get();
        //         break;
        //     case 'maLop':
        //         $sinhvien = SinhVien::where('maLop','=',$tukhoa)->get();
        //         break;
        // }
            
        return view('canbo.qlhssv.timkiemsv',['sinhvien'=>$sinhvien]);  

    }

    public function getXemHS($maSV) {
        $sinhvien = SinhVien::find($maSV);
        $bangdiem = BangDiem::where('maSV','=',$maSV)->get();
        return view('canbo.qlhssv.xemhs',['sinhvien'=>$sinhvien,'bd'=>$bangdiem]);
    }

    public function postTimKiemTKSV(Request $request) {
        $tukhoa = $request->tukhoa;
        $sinhvien = TaiKhoan::where('username','=',$tukhoa)->first();
        return view('canbo.qlhssv.themhs',['taikhoan'=>$sinhvien]);
    }

    public function getThemHS() {
        return view('canbo.qlhssv.themhs');
    }

    public function postThemHS(Request $request, $username) {
        $sinhvien = SinhVien::where('username','=',$username)->first();
        $ttcanhan = new ThongTinCaNhan;

        $sinhvien->maSV = $request->mssv;
        $ttcanhan->maSV = $request->mssv;

        $sinhvien->maLop = $request->malop;
        
        $ttcanhan->danToc = $request->dantoc;
        $ttcanhan->namTN = $request->namtncap3;
        $ttcanhan->diaChi = $request->diachi;
        $ttcanhan->soCMND = $request->socmnd;
        $ttcanhan->tonGiao = $request->tongiao;
        $ttcanhan->truongTHPT = $request->truongthpt;
        $ttcanhan->hoKhau = $request->hokhau;


        $sinhvien->save();
        $ttcanhan->save();

        return redirect('canbo/qlhssv/xemhs/'.$sinhvien->maSV);
    }

    public function getSuaHS($maSV) {
        $sinhvien = SinhVien::find($maSV);
        $bangdiem = BangDiem::where('maSV','=',$maSV)->get();
        return view('canbo.qlhssv.suahs',['sv'=>$sinhvien,'bd'=>$bangdiem]);
    }
    
    public function postSuaHS(Request $request, $maSV) {
        $sinhvien = SinhVien::find($maSV);
        $taikhoan = TaiKhoan::find($sinhvien->username);
        $lopsv = LopSV::find($sinhvien->maLop);
        $ttcanhan = ThongTinCaNhan::find($sinhvien->maSV);
        $tthoctap = ThongTinHocTap::find($sinhvien->maSV);


        $taikhoan->hoTen = $request->hoten;

        $sinhvien->lopsv->ctdaotao->maCT = $request->machuongtrinh;
        $sinhvien->lopsv->vien->maVien = $request->mavien;
        $taikhoan->gioiTinh = $request->gioitinh;
        $sinhvien->lopsv->maLop = $request->malop;
        $sinhvien->lopsv->khoaHoc = $request->khoahoc;
        $taikhoan->email = $request->email;
        $taikhoan->sdt = $request->sodienthoai;

        $ttcanhan->danToc = $request->dantoc;
        $ttcanhan->namTN = $request->namtncap3;
        $ttcanhan->diaChi = $request->diachi;
        $ttcanhan->soCMND = $request->socmnd;
        $ttcanhan->tonGiao = $request->tongiao;
        $ttcanhan->truongTHPT = $request->truongthpt;
        $ttcanhan->hoKhau = $request->hokhau;

        

        $sinhvien->save();
        $taikhoan->save();
        $ttcanhan->save();

        return redirect('canbo/qlhssv/xemhs/'.$maSV)->with('thongbao','Sửa thành công');
    }

    public function getXoaHS($maSV) {
        $sinhvien = SinhVien::find($maSV);
        $taikhoan = TaiKhoan::find($sinhvien->username);
        $ttcanhan = ThongTinCaNhan::find($sinhvien->tthoctap->maSV);
        $taikhoan->delete();
        $sinhvien->delete();
        $ttcanhan->delete();
        return view('admin.home')->with('thongbao','Xoá thành công');
    }

// sinh viên - xem điểm 
    public function getXemDiem() {
        $user = Auth::user();
        $sv = SinhVien::find($user->sinhvien->maSV);
        $bangdiem = BangDiem::where('maSV','=',$sv->maSV)->get();
        return view('sinhvien.xemdiem.xemdiem',['sv'=>$sv,'bd'=>$bangdiem]);
    }
}
