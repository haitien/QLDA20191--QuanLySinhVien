@extends('sinhvien.layout.index')
@section('content')
<div class="xemlopdk-container">
	<p class="title">Xem lớp đã đăng ký : </p>
	<table class="result-table">
		<thead>
			<tr>
				<th class="long">Học phần</th>
				<th class="short">Mã lớp</th>
				<th class="short">Mã học phần</th>
				<th class="short">Viện</th>
				<th class="short">Delete</th>
			</tr>
		</thead>
		<tbody class="element">
			@foreach($lophoc as $lop)
				<tr>
					<td class="long">{{$lop->lophoc->hocphan->tenHocPhan}}</td>
					<td class="short">{{$lop->maLop}}</td>
					<td class="short">{{$lop->lophoc->maHocPhan}}</td>
					<td class="short">{{$lop->lophoc->hocphan->vien->tenVien}}</td>
					<td class="short">
						<form action="sinhvien/qldkl/huydangky/{{$lop->maLop}}" method="POST">
							<input type="hidden" name="_token" value ="{{csrf_token()}}">
							<button class="del-button" onclick="javascript: return confirm('Xác nhận');" href="">Huỷ đăng ký
							</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
