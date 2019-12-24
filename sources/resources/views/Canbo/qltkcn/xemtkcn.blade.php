@extends('canbo.layout.index')
@section('content')
<div class="xemtkcn-container">
	<p class="title">Xem tài khoản cá nhân</p>
	<p class="label">Thông tin tài khoản</p>
	<div class="user-infor">
		<div class="field-block">
			<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Họ và tên :</p>
				<p>{{$user->hoTen}}</p>
			</div>
			<div class="text-field">
				<p>Tên tài khoản :</p>
				<p>{{$user->username}}</p>
			</div>
			<div class="text-field">
				<p>Chức vụ :</p>
				<p>{{$user->getChucVu($user->chucVu)}}</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Giới tính :</p>
				<p>{{$user->getGioiTinh($user->gioiTinh)}}</p>
			</div>
			<div class="text-field">
				<p>Email :</p>
				<p>{{$user->email}}</p>
			</div>
			<div class="text-field">
				<p>SĐT :</p>
				<p>{{$user->sdt}}</p>
			</div>
		</div>
	</div>
	<a href="canbo\qltkcn\suatkcn\{{$user->username}}">
		<button type="submit" class="edit-button">Sửa</button>
	</a>
</div>
@endsection