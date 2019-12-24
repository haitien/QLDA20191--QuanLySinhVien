@extends('sinhvien.layout.index')
@section('content')
<div class="suahscn-container">
	<p class="title">Sửa hồ sơ cá nhân</p>
	<p class="label">Thông tin sinh viên</p>
	<form action="sinhvien\qlhscn\suahscn" method="POST">
		<input type="hidden" name="_token" value ="{{csrf_token()}}">
		<div class="student-infor">
			<div class="field-block">
				<a href="">
					<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
				</a>
				<p>MSSV :</p>
				<p> {{$sv->sinhvien->maSV}}</p>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Họ và tên :</p>
					<input type="text" value ="{{$sv->hoTen}}" name="hoTen">
				</div>
				<div class="text-field">
					<p>Bậc đào tạo :</p>
					<input type="text" value="Đại học" name="" readonly="readonly">
				</div>
				<div class="text-field">
					<p>Chương trình :</p>
					<input type="text" value="{{$sv->sinhvien->lopsv->ctdaotao->tenCT}}" name="" readonly="readonly">
				</div>
				<div class="text-field">
					<p>Viện :</p>
					<input type="text" value="{{$sv->sinhvien->lopsv->vien->tenVien}}" name="" readonly="readonly">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field"> 
					<p>Giới tính :</p>
					<select name="gioiTinh" style="height: 26px; width: 204px;">
						<option value='0' {{ ($sv->gioiTinh == 0)?'selected':''}}>Nam</option>
						<option value='1' {{ ($sv->gioiTinh == 1)?'selected':''}}>Nữ</option>
						<option value='2' {{ ($sv->gioiTinh == 2)?'selected':''}}>Khác</option>
					</select>
				</div>
				<div class="text-field">
					<p>Lớp :</p>
					<input type="text" value="{{$sv->sinhvien->lopsv->tenLop}}" name="" readonly="readonly">
				</div>
				<div class="text-field">
					<p>Khoá Học :</p>
					<input type="text" value="{{$sv->sinhvien->lopsv->khoahoc}}" name="" readonly="readonly">
				</div>
				<div class="text-field">
					<p>Email :</p>
					<input type="text" value="{{$sv->email}}" name="email">
				</div>
			</div>
		</div>
		<hr>
		<p class="label">Thông tin cá nhân</p>
		<div class="personal-infor">
			<div class="field-block-1">
				<div class="text-field">
					<p>Dân tộc :</p>
					<input type="text" value="{{$sv->sinhvien->ttcanhan->danToc}}" name="danToc">
				</div>
				<div class="text-field">
					<p>Năm TN cấp 3 :</p>
					<input type="text" value="{{$sv->sinhvien->ttcanhan->namTN}}" name="namTN">
				</div>
				<div class="text-field">
					<p>Đại chỉ :</p>
					<input type="text" value="{{$sv->sinhvien->ttcanhan->diaChi}}" name="diaChi">
				</div>
				<div class="text-field">
					<p>Số CMND :</p>
					<input type="text" value="{{$sv->sinhvien->ttcanhan->soCMND}}" name="soCMND">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Tôn giáo :</p>
					<input type="text" value="{{$sv->sinhvien->ttcanhan->tonGiao}}" name="tonGiao">
				</div>
				<div class="text-field">
					<p>Trường THPT :</p>
					<input type="text" value="{{$sv->sinhvien->ttcaNhan->truongTHPT}}" name="truongTHPT">
				</div>
				<div class="text-field">
					<p>Hộ khẩu :</p>
					<input type="text" value="{{$sv->sinhvien->ttcanhan->hoKhau}}" name="hoKhau">
				</div>
				<div class="text-field">
					<p>Số điện thoại :</p>
					<input type="text" value="{{$sv->sdt}}" name="sdt">
				</div>
			</div>
		</div>
		<button type="submit" class="edit-button">Lưu</button>
	</form>
</div>
@endsection
