@extends('sinhvien.layout.index')
@section('content')
<div class="xemhscn-container">
	<p class="title">Xem hồ sơ cá nhân</p>
	<p class="label">Thông tin sinh viên</p>
	<div class="student-infor">
		<div class="field-block">
			<a href="">
				<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
			</a>
			<p>MSSV : </p>
			<p> 20151950</p>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Họ và tên :</p>
				<p>{{$sv->hoTen}}</p>
			</div>
			<div class="text-field">
				<p>Bậc đào tạo :</p>
				<p>Đại học</p>
			</div>
			<div class="text-field">
				<p>Chương trình :</p>
				<p>{{$sv->sinhvien->lopsv->ctdaotao->tenCT}}</p>
			</div>
			<div class="text-field">
				<p>Viện :</p>
				<p>{{$sv->sinhvien->lopsv->vien->tenVien}}</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Giới tính :</p>
				<p>{{$sv->getGioiTinh($sv->gioiTinh)}}</p>
			</div>
			<div class="text-field">
				<p>Lớp :</p>
				<p>{{$sv->sinhvien->lopsv->tenLop}}</p>
			</div>
			<div class="text-field">
				<p>Khoá Học :</p>
				<p>{{$sv->sinhvien->lopsv->khoaHoc}}</p>
			</div>
			<div class="text-field">
				<p>Email :</p>
				<p>{{$sv->email}}</p>
			</div>
		</div>
	</div>
	<hr>
	<p class="label">Thông tin cá nhân</p>
	<div class="personal-infor">
		<div class="field-block-1">
			<div class="text-field">
				<p>Dân tộc :</p>
				<p>{{$sv->sinhvien->ttcanhan->danToc}}</p>
			</div>
			<div class="text-field">
				<p>Năm TN cấp 3 :</p>
				<p>{{$sv->sinhvien->ttcanhan->namTN}}</p>
			</div>
			<div class="text-field">
				<p>Đại chỉ :</p>
				<p>{{$sv->sinhvien->ttcanhan->diaChi}}</p>
			</div>
			<div class="text-field">
				<p>Số CMND :</p>
				<p>{{$sv->sinhvien->ttcanhan->soCMND}}</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Tôn giáo :</p>
				<p>{{$sv->sinhvien->ttcanhan->tonGiao}}</p>
			</div>
			<div class="text-field">
				<p>Trường THPT :</p>
				<p>{{$sv->sinhvien->ttcanhan->truongTHPT}}</p>
			</div>
			<div class="text-field">
				<p>Hộ khẩu :</p>
				<p>{{$sv->sinhvien->ttcanhan->hoKhau}}</p>
			</div>
			<div class="text-field">
				<p>Số điện thoại :</p>
				<p>{{$sv->sdt}}</p>
			</div>
		</div>
	</div>
	<hr>
	<p class="label">Thông tin học tập</p>
	<div class="personal-infor">
		<div class="field-block-1">
			<div class="text-field">
				<p>Tổng kết học kỳ :</p>
				<p>2.98</p>
			</div>
			<div class="text-field">
				<p>Điểm tích luỹ :</p>
				<p></p>
			</div>
			<div class="text-field">
				<p>Số TC nợ đăng ký :</p>
				<p></p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Tín chỉ tích luỹ :</p>
				<p></p>
			</div>
			<div class="text-field">
				<p>Trình độ học vấn :</p>
				<p></p>
			</div>
			<div class="text-field">
				<p>Mức cảnh cáo :</p>
				<p></p>
			</div>
		</div>
	</div>
	<a href="sinhvien\qlhscn\suahscn">
			<button type="submit" class="edit-button">Sửa</button>
	</a>			
</div>
@endsection
