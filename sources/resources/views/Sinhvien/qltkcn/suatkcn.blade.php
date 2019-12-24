@extends('sinhvien.layout.index')
@section('content')
<div class="suatkcn-container">
	<p class="title">Sửa tài khoản cá nhân</p>
	<p class="label">Thông tin tài khoản</p>
	<form action="sinhvien\qltkcn\suatkcn\{{$user->username}}" method="POST">
		<input type="hidden" name="_token" value ="{{csrf_token()}}">
		<div class="user-infor">
			<div class="field-block">
				<img src="frontend\image\avatar.png" height="204" class="infor-image">
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Họ và tên :</p>
					<input type="text" value ="{{$user->hoTen}}" name="hoTen" readonly="readonly">
				</div>
				<div class="text-field">
					<p>Tên tài khoản :</p>
					<input type="text" value="{{$user->username}}" name="username" readonly="readonly">
				</div>
				<div class="text-field">
					<p>Email :</p>
					<input type="text" value="{{$user->email}}" name="email">
				</div>
				<div class="text-field">
					<p>SĐT :</p>
					<input type="text" value="{{$user->sdt}}" name="sdt">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Giới tính :</p>
					<select name="gioiTinh" style="height: 26px; width: 204px;">
						<option value='0' {{ ($user->gioiTinh == 0)?'selected':''}}>Nam</option>
						<option value='1' {{ ($user->gioiTinh == 1)?'selected':''}}>Nữ</option>
						<option value='2' {{ ($user->gioiTinh == 2)?'selected':''}}>Khác</option>
					</select>
				</div>
				<div class="text-field">
					<p>Chức vụ :</p>
					<input type="text" value="{{$user->getChucVu($user->chucVu)}}" readonly="readonly">
				</div>
				<div class="text-field">
					<p>Mật khẩu mới:</p>
					<input type="password" value="" name="password">
				</div>
				<div class="text-field">
					<p>Nhập lại MK :</p>
					<input type="password" value="" name="passwordagain">
				</div>
			</div>
		</div>
		<button type="submit" class="edit-button">Lưu</button>
	</form>
</div>
@endsection

