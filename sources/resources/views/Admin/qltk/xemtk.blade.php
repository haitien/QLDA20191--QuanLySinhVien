@extends('admin.layout.index')
@section('content')
<div class="xemtk-container">
	<p class="title">Xem tài khoản</p>
	<p class="label">Thông tin tài khoản</p>
	<div class="account-infor">
		<div class="field-block">
			<img src="frontend\image\avatar.png" height="204" class="infor-image">
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
				<p>Email :</p>
				<p>{{$user->email}}</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Giới tính :</p>
				<p>{{$user->getGioiTinh($user->gioiTinh)}}</p>
			</div>
			<div class="text-field">
				<p>Chức vụ :</p>
				<p>{{$user->getChucVu($user->chucVu)}}</p>
			</div>
			<div class="text-field">
				<p>SĐT :</p>
				<p>{{$user->sdt}}</p>
			</div>
		</div>
	</div>
	<div class="button">
		<a href="admin\qltk\suatk\{{$user->username}}"> 
			<button type="submit" class="edit-button">Sửa</button>
		</a>
		<form action="admin\qltk\xoatk\{{$user->username}}">
			<button type="submit" class="del-button" onclick="javascript: return confirm('Xác nhận');" 
			href="">Xoá</button>
		</form>
	</div>
	<div style="clear:both"></div>
</div>
@endsection