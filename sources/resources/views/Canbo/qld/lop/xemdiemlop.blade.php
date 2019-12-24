@extends('canbo.layout.index')
@section('content')
<div class="xemdiemlop-container">
	<p class="title">Bảng điểm lớp: {{$lophoc->hocphan->tenHocPhan}} - {{$lophoc->maLop}} </p>
	<form action="canbo\qld\lop\nhapdiem\{{$lophoc->maLop}}" method="POST">
		<input type="hidden" name="_token" value ="{{csrf_token()}}">
		<table class="result-table">
			<thead>
				<tr>
					<th class="long">Họ tên</th>
					<th class="short">MSSV</th>
					<th class="long">Hệ</th>
					<th class="short">Lớp</th>
					<th class="short">Khoá</th>
					<th class="short">Điểm QT</th>
					<th class="short">Điểm thi</th>
				</tr>
			</thead>
			<tbody class="element">	
				@foreach($bangdiem as $sv)
					<tr>
						<td class="long">{{$sv->sinhvien->taikhoan->hoTen}}</td>
						<td class="short">{{$sv->maSV}}</td>
						<td class="long">{{$sv->sinhvien->lopsv->ctdaotao->tenCT}}</td>
						<td class="long">{{$sv->sinhvien->lopsv->tenLop}}</td>
						<td class="short">{{$sv->sinhvien->lopsv->khoaHoc}}</td>
						@if($sv->diemQT == null) 
							<td class="short"><input type="text" name="diemQT-{{$sv->maSV}}" style="width: 100%; border: none; text-align: center; font-size: 17px;"></td>
						@else 
							<td class="short">{{$sv->diemQT}}</td>
						@endif
						@if($sv->diemCK == null) 
							<td class="short"><input type="text" name="diemCK-{{$sv->maSV}}" style="width: 100%;border: none; text-align: center; font-size: 17px;"></td>
						@else 
							<td class="short">{{$sv->diemCK}}</td>
						@endif
					</tr>
				@endforeach
			</tbody>
		</table>
		<button type="submit" style="height: 30px;width: 100px; margin-top: 20px; margin-left: 500px;">Lưu</button>
	</form>
</div>
@endsection