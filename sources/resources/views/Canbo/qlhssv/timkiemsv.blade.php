@extends('canbo.layout.index')
@section('content')
<div class="timkiemsv-container">
	<p class="title">Tìm kiếm sinh viên </p>
	<div class="div-search">
		<form action="canbo\qlhssv\timkiemsv" method="POST">
			<input type="hidden" name="_token" value ="{{csrf_token()}}">
			<input type="text" placeholder="Nhập từ khoá" name="tukhoa">
			<select name='tieuchi' >
				<option value="maSV">MSSV</option>
				<option value="hoTen">Họ Tên</option>
				<option value="maLop">Lớp</option>
			</select>
			<button type="submit">Tìm</button>
		</form>
	</div>
	@if($_POST) 
	<table class="result-table">
		<thead>
			<tr>
				<th class="long">Họ và tên</th>
				<th class="short">MSSV</th>
				<th class="long">Lớp</th>
				<th class="short">Khoá</th>
				<th class="short">Xem</th>
			</tr>
		</thead>
		<tbody class="element">
			@foreach($sinhvien as $sv) 
				<tr>
					<td>{{$sv->taikhoan->hoTen}}</td>
					<td>{{$sv->maSV}}</td>
					<td>{{$sv->lopsv->tenLop}}</td>
					<td>{{$sv->lopsv->khoaHoc}}</td>
					<td>
						<a href="canbo\qlhssv\xemhs\{{$sv->maSV}}"><img src="frontend\image\view.png" style="height:35px;width: 25px;"></a> 
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@endif
</div>
@endsection
