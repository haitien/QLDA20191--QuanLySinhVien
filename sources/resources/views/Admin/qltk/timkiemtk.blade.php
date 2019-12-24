@extends('admin.layout.index')
@section('content')
<div class="timkiemtk-container">
	<p class="title">Tìm kiếm tài khoản </p>
	<div class="div-search">
		<form action="admin\qltk\timkiemtk" method="POST">
			<input type="hidden" name="_token" value ="{{csrf_token()}}">
			<input type="text" placeholder="Nhập từ khoá" name="tukhoa">
			<select name="tieuchi">
				<option value="username">Tên TK</option>
				<option value="hoTen">Họ Tên</option>
			</select>
			<button type="submit" name="submit">Tìm</button>
		</form>
	</div>
	@if(!empty($_POST))
	<table class="result-table">
		<thead>
			<tr>
				<th>Họ và tên</th>
				<th>Tên TK</th>
				<th>Chức Vụ</th>
				<th>Giới Tính</th>
				<th>Xem</th>
			</tr>
		</thead>
		<tbody class="element">
			@foreach($taikhoan as $tk) 
				<tr>
					<td>{{$tk->hoTen}}</td>
					<td>{{$tk->username}}</td>
					<td>{{$tk->getChucVu($tk->chucVu)}}</td>
					<td>{{$tk->getGioiTinh($tk->gioiTinh)}}</td>
					<td>
						<a href="admin\qltk\xemtk\{{$tk->username}}"><img src="frontend\image\view.png" style="height: : 35px;width: 25px;"></a> 
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@endif
</div>
@endsection