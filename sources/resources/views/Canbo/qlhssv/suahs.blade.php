@extends('canbo.layout.index')
@section('content')
<div class="suahs-container">
	<p class="title">Sửa hồ sơ</p>
	<p class="label">Thông tin sinh viên</p>
	<form action="canbo\qlhssv\suahs\{{$sv->maSV}}" method="POST">
		<input type="hidden" name="_token" value ="{{csrf_token()}}">
		<div class="student-infor">
			<div class="field-block">
				<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
				<p>MSSV :</p>
				<p> {{$sv->maSV}}</p>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Họ và tên :</p>
					<input type="text" value ="{{$sv->taikhoan->hoTen}}" name="hoten">
				</div>
				<div class="text-field">
					<p>Giới tính :</p>
					<select name="gioitinh" style="height: 26px; width: 204px;">
						<option value='0' {{ ($sv->taikhoan->gioiTinh == 0)?'selected':''}}>Nam</option>
						<option value='1' {{ ($sv->taikhoan->gioiTinh == 1)?'selected':''}}>Nữ</option>
						<option value='2' {{ ($sv->taikhoan->gioiTinh == 2)?'selected':''}}>Khác</option>
					</select>
				</div>
				<div class="text-field">
					<p>Email :</p>
					<input type="text" value="{{$sv->taikhoan->email}}" name="email">
				</div>				
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Lớp :</p>
					<input type="text" value="{{$sv->lopsv->tenLop}}" name="malop">
				</div>
				<div class="text-field">
					<p>Khoá Học :</p>
					<input type="text" value="{{$sv->lopsv->khoaHoc}}" name="khoahoc"  readonly="readonly">
				</div>
				<div class="text-field">
					<p>Chương trình :</p>
					<input type="text" value="{{$sv->lopsv->ctdaotao->tenCT}}" name="machuongtrinh" readonly="readonly">
				</div>
				<div class="text-field">
					<p>Viện :</p>
					<input type="text" value="{{$sv->lopsv->vien->tenVien}}" name="mavien" readonly="readonly">
				</div>				
			</div>
		</div>
		<hr>
		<p class="label">Thông tin cá nhân</p>
		<div class="personal-infor">
			<div class="field-block-1">
				<div class="text-field">
					<p>Dân tộc :</p>
					<input type="text" value="{{$sv->ttcanhan->tonGiao}}" name="dantoc">
				</div>
				<div class="text-field">
					<p>Năm TN cấp 3 :</p>
					<input type="text" value="{{$sv->ttcanhan->namTN}}" name="namtncap3">
				</div>
				<div class="text-field">
					<p>Địa chỉ :</p>
					<input type="text" value="{{$sv->ttcanhan->diaChi}}" name="diachi">
				</div>
				<div class="text-field">
					<p>Số CMND :</p>
					<input type="text" value="{{$sv->ttcanhan->soCMND}}" name="socmnd">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Tôn giáo :</p>
					<input type="text" value="{{$sv->ttcanhan->tonGiao}}" name="tongiao">
				</div>
				<div class="text-field">
					<p>Trường THPT :</p>
					<input type="text" value="{{$sv->ttcanhan->truongTHPT}}" name="truongthpt">
				</div>
				<div class="text-field">
					<p>Hộ khẩu :</p>
					<input type="text" value="{{$sv->ttcanhan->hoKhau}}" name="hokhau">
				</div>
				<div class="text-field">
					<p>Số điện thoại :</p>
					<input type="text" value="{{$sv->taikhoan->sdt}}" name="sdt">
				</div>
			</div>
		</div>
		<hr>
		<p class="label">Thông tin học tập</p>
		<div class="personal-infor">
		<div class="field-block-1">
			<div class="text-field">
				<p style="width: 160px;">Tổng kết học kỳ :</p>
				<input type="text" name="hocky" style="width: 170px;">
			</div>
			<div class="text-field">
				<p style="width: 160px;">Điểm tích luỹ :</p>
				<p>{{$sv->getCPA($bd)}}</p>
			</div>
			<div class="text-field">
				<p style="width: 160px;">Số TC nợ đăng ký :</p>
				<p>{{$sv->getTCNo($bd)}}</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p style="width: 160px;">Tín chỉ tích luỹ :</p>
				<p>{{$sv->getTCTichLuy($bd)}}</p>
			</div>
			<div class="text-field">
				<p style="width: 160px;">Trình độ học vấn :</p>
				<input type="text" name="nam" style="width: 170px;">
			</div>
			<div class="text-field">
				<p style="width: 160px;">Mức cảnh cáo :</p>
				<input type="text" name="mucCC" style="width: 170px;">
			</div>
		</div>
	</div>
		<button type="submit" class="edit-button">Lưu</button>
	</form>
</div>
@endsection