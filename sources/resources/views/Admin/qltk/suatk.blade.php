@extends('admin.layout.index')
@section('content')
<div class="suatk-container">
	<p class="title">Sửa tài khoản</p>
	<p class="label">Thông tin sinh viên</p>
	@if(count($errors) > 0)
		<div class="alert-danger">
			@foreach($errors->all() as $err)
				{{$err}} <br>
			@endforeach
		</div>
	@endif

	@if(session('thongbao'))
		<div class="alert-success">
			{{session('thongbao')}}
		</div>
	@endif
	<form action="admin/qltk/suatk/{{$user->username}}" method="POST">
		<input type="hidden" name="_token" value ="{{csrf_token()}}">
		<div class="account-infor">
			<div class="field-block">
				<img src="frontend\image\avatar.png" height="204" class="infor-image">
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Họ và tên :</p>
					<input type="text" value ="{{$user->hoTen}}" name="hoTen">
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
					<select name="chucVu" style="height: 26px; width: 204px;">
						<option value='0' {{ ($user->chucVu == 0)?'selected':''}}>Sinh viên</option>
						<option value='1' {{ ($user->chucVu == 1)?'selected':''}}>Cán bộ</option>
						<option value='2' {{ ($user->chucVu == 2)?'selected':''}}>Admin</option>
					</select>
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