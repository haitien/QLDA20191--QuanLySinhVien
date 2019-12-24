@extends('canbo.layout.index')
@section('content')
<div class="xemhs-container">
	<p class="title">Xem hồ sơ</p>
	<p class="label">Thông tin sinh viên</p>
	<div class="student-infor">
		<div class="field-block">
			<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
			<p>MSSV : </p>
			<p>{{$sinhvien->maSV}}</p>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Họ và tên :</p>
				<p>{{$sinhvien->taikhoan->hoTen}}</p>
			</div>
			<!--NOTE: Bỏ bậc đào tạo -->
			<div class="text-field">
				<p>Giới tính :</p>
				<p>{{$sinhvien->taikhoan->getGioiTinh($sinhvien->taikhoan->gioiTinh)}}</p>
			</div>
			<div class="text-field">
				<p>Email :</p>
				<p>{{$sinhvien->taikhoan->email}}</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Lớp :</p>
				<p>{{$sinhvien->lopsv->tenLop}}</p>
			</div>
			<div class="text-field">
				<p>Khoá Học :</p>
				<p>{{$sinhvien->lopsv->khoaHoc}}</p>
			</div>
			<div class="text-field">
				<p>Chương trình :</p>
				<p>{{$sinhvien->lopsv->ctdaotao->tenCT}}</p>
			</div>
			<div class="text-field">
				<p>Viện :</p>
				<p>{{$sinhvien->lopsv->vien->tenVien}}</p>
			</div>
	
		</div>
	</div>
	<hr>
	<p class="label">Thông tin cá nhân</p>
	<div class="personal-infor">
		<div class="field-block-1">
			<div class="text-field">
				<p>Dân tộc :</p>
				<p>{{$sinhvien->ttcanhan->danToc}}</p>
			</div>
			<div class="text-field">
				<p>Năm TN cấp 3 :</p>
				<p>{{$sinhvien->ttcanhan->namTN}}</p>
			</div>
			<div class="text-field">
				<p>Đại chỉ :</p>
				<p>{{$sinhvien->ttcanhan->diaChi}}</p>
			</div>
			<div class="text-field">
				<p>Số CMND :</p>
				<p>{{$sinhvien->ttcanhan->soCMND}}</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Tôn giáo :</p>
				<p>{{$sinhvien->ttcanhan->tonGiao}}</p>
			</div>
			<div class="text-field">
				<p>Trường THPT :</p>
				<p>{{$sinhvien->ttcanhan->truongTHPT}}</p>
			</div>
			<div class="text-field">
				<p>Hộ khẩu :</p>
				<p>{{$sinhvien->ttcanhan->hoKhau}}</p>
			</div>
			<div class="text-field">
				<p>Số điện thoại :</p>
				<p>{{$sinhvien->ttcanhan->sdt}}</p>
			</div>
		</div>
	</div>
	<hr>
	<p class="label">Thông tin học tập</p>
	<div class="personal-infor">
		<div class="field-block-1">
			<div class="text-field">
				<p >Tổng kết học kỳ :</p>
				<p>20171</p>
			</div>
			<div class="text-field">
				<p>Điểm tích luỹ :</p>
				<p>{{$sinhvien->getCPA($bd)}}</p>
			</div>
			<div class="text-field">
				<p>Số TC nợ đăng ký :</p>
				<p>{{$sinhvien->getTCNo($bd)}}</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Tín chỉ tích luỹ :</p>
				<p>{{$sinhvien->getTCTichLuy($bd)}}</p>
			</div>
			<div class="text-field">
				<p>Trình độ học vấn :</p>
				<p>3</p>
			</div>
			<div class="text-field">
				<p>Mức cảnh cáo :</p>
				<p>M0</p>
			</div>
		</div>
	</div>
	<div class="button">
		<a href="canbo\qlhssv\suahs\{{$sinhvien->maSV}}">
			<button type="submit" class="edit-button">Sửa</button>
		</a>
		<form action="canbo\qlhssv\xoahs">
			<button type="submit" class="del-button">Xoá</button>
		</form>
	</div>
	<div style="clear:both"></div>
</div>
@endsection