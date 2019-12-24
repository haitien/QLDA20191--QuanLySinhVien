@extends('admin.layout.index')

@section('content')
<div class="themtk-container">
	<p class="title">Thêm tài khoản</p>
	<p class="label">Thông tin tài khoản</p>
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
	<form action="admin\qltk\themtk" method="POST">
		{{ csrf_field() }}
		<div class="account-infor">
			<div class="field-block">
				<img src="frontend\image\avatar.png" height="204" class="infor-image">
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Họ và tên :</p>
					<input type="text" value ="" name="hoTen">
				</div>
				<div class="text-field">
					<p>Tên tài khoản :</p>
					<input type="text" value="" name="username">
				</div>
				<div class="text-field">
					<p>Email :</p>
					<input type="text" value="" name="email">
				</div>
				<div class="text-field">
					<p>SĐT :</p>
					<input type="text" value="" name="sdt">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Giới tính :</p>
					<select name="gioiTinh" style="height: 26px; width: 204px;">
						<option value='0'>Nam</option>
						<option value='1'>Nữ</option>
						<option value='2'>Khác</option>
					</select>
				</div>
				<div class="text-field">
					<p>Chức vụ :</p>
					<select name="chucVu" style="height: 26px; width: 204px;">
						<option value='0'>Sinh viên</option>
						<option value='1'>Cán bộ</option>
						<option value='2'>Admin</option>
					</select>
				</div>
				<div class="text-field">
					<p>Mật khẩu :</p>
					<input type="password" value="" name="password">
				</div>
				<div class="text-field">
					<p>Nhập lại MK :</p>
					<input type="password" value="" name="passwordagain">
				</div>
			</div>
		</div>
		<button type="submit" class="edit-button">Thêm</button>
	</form>
</div>
@endsection