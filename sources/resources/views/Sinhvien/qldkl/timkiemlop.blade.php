@extends('sinhvien.layout.index')
@section('content')
<div class="timkiemlop-container">
	<p class="title">Tìm kiếm lớp </p>
	<div class="div-search">
		<form action="sinhvien\qldkl\timkiemlop" method="POST">
			<input type="hidden" name="_token" value ="{{csrf_token()}}">
			<input type="text" placeholder="Nhập từ khoá" name="tukhoa">
			<select name='tieuchi'>
				<option value="maLop">Mã lớp</option>
				<option value="tenHocPhan">Học phần</option>
				<option value="maHocPhan">Mã HP</option>
			</select>
			<button type="submit">Tìm</button>
		</form>
	</div>
	@if(!empty($_POST))
	<table class="result-table">
		<thead>
			<tr>
				<th class="long">Học phần</th>
				<th class="short">Mã lớp</th>
				<th class="short">Mã học phần</th>
				<th class="short">Viện</th>
				<th>Xem</th>
			</tr>
		</thead>
		<tbody class="element">
			@foreach($lophoc as $lop)
				<tr>
					<td class="long">{{$lop->hocphan->tenHocPhan}}</td>
					<td class="short">{{$lop->maLop}}</td>
					<td class="short">{{$lop->hocphan->maHocPhan}}</td>
					<td class="short">{{$lop->hocphan->vien->tenVien}}</td>
					<td>
						<a href="sinhvien\qldkl\xemlop\{{$lop->maLop}}"><img src="frontend\image\view.png" style="height: 25px;width: 25px;"></a> 
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@endif
</div>
@endsection
