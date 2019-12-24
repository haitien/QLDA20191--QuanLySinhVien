@extends('canbo.layout.index')
@section('content')
<div class="themhs-container">
	<p class="title">Thêm hồ sơ</p>
	@if(!$_POST) 
	<div class="div-search">
		<form action="canbo\qlhssv\timkiemtksv" method="POST">
			<input type="hidden" name="_token" value ="{{csrf_token()}}">
			<input type="text" placeholder="Nhập tên tài khoản" name="tukhoa">
			<button type="submit">Tìm</button>
		</form>
	</div>
	@else
	<p class="label">Thông tin sinh viên</p>
	<form action="canbo\qlhssv\themhs\{{$taikhoan->username}}" method="POST">
		<input type="hidden" name="_token" value ="{{csrf_token()}}">
		<div class="student-infor">
			<div class="field-block">
				<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
				<p>MSSV :</p>
				<input type="text" name="mssv">
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Họ và tên :</p>
					<input type="text" value="{{$taikhoan->hoTen}}" name="hovaten" readonly="readonly" >
				</div>
				<div class="text-field">
					<p>Mã Lớp :</p>
					<input type="text" name="malop">
				</div>
				<!-- NOTE: Bỏ bậc đào tạo-->
			</div>
			<div class="field-block-1" style="margin-bottom: 120px;">
				<div class="text-field">
					<p>Giới tính :</p>
					<select name="gioitinh" style="height: 26px; width: 204px;">
						<option value='0'>Nam</option>
						<option value='1'>Nữ</option>
						<option value='2'>Khác</option>
					</select>
				</div>
				<div class="text-field">
					<p>Email :</p>
					<input type="text" name="email" value="{{$taikhoan->email}}" name="email" readonly="readonly">
				</div>
			</div>
		</div>
		<hr>
		<p class="label">Thông tin cá nhân</p>
		<div class="personal-infor">
			<div class="field-block-1">
				<div class="text-field">
					<p>Dân tộc :</p>
					<input type="text" name="dantoc">
				</div>
				<div class="text-field">
					<p>Năm TN cấp 3 :</p>
					<input type="text" name="namtncap3">
				</div>
				<div class="text-field">
					<p>Địa chỉ :</p>
					<input type="text" name="diachi">
				</div>
				<div class="text-field">
					<p>Số CMND :</p>
					<input type="text" name="socmnd">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Tôn giáo :</p>
					<input type="text" name="tongiao">
				</div>
				<div class="text-field">
					<p>Trường THPT :</p>
					<input type="text" name="truongthpt">
				</div>
				<div class="text-field">
					<p>Hộ khẩu :</p>
					<input type="text" name="hokhau">
				</div>
				<div class="text-field">
					<p>Số điện thoại :</p>
					<input type="text" value="{{$taikhoan->sdt}}" name="sodienthoai">
				</div>
			</div>
		</div>
		<button type="submit" class="add-button">Thêm</button>
	</form>
	@endif
</div>
@endsection