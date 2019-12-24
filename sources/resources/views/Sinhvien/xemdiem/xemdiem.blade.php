@extends('sinhvien.layout.index')
@section('content')
<div class="xemdiem-container">
	<p class="title">Bảng điểm sinh viên </p>
	<table class="result-table">
		<thead>
			<tr>
				<th class="short">Học kỳ</th>
				<th class="short">Mã HP</th>
				<th class="long">Tên HP</th>
				<th class="short">TC</th>
				<th class="short">Lớp học</th>
				<th class="short">Điểm QT</th>
				<th class="short">Điểm thi</th>
				<th class="short">Điểm chữ</th>
			</tr>
		</thead>
		<tbody class="element">
			@foreach($bd as $diem)
				<tr>
					<td class="short">{{$diem->lophoc->maHocKy}}</td>
					<td class="short">{{$diem->lophoc->maHocPhan}}</td>
					<td class="long">{{$diem->lophoc->hocphan->tenHocPhan}}</td>
					<td class="short">{{$diem->lophoc->hocphan->soTC}}</td>
					<td class="short">{{$diem->maLop}}</td>
					<td class="short">{{$diem->diemQT}}</td>
					<td class="short">{{$diem->diemCK}}</td>
					<td class="short">{{$diem->diemChu}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	<p class="title">Kết quả học tập </p>
	<table class="result-table">
		<thead>
			<tr>
				<th class="short">Học kỳ</th>
				<th class="short">GPA</th>
				<th class="short">CPA</th>
				<th class="short">TC qua</th>
				<th class="short">TC Tích luỹ</th>
				<th class="short">TC nợ</th>
				<th class="short">TC ĐK</th>
				<th class="short">Năm</th>
				<th class="short">CTĐT</th>
			</tr>
		</thead>
		<tbody class="element">
			<tr>
				<td class="short">20151</td>
				<td class="short">3.2</td>
				<td class="short">3.2</td>
				<td class="short">23</td>
				<td class="short">120</td>
				<td class="short">0</td>
				<td class="short">143</td>
				<td class="short">4</td>
				<td class="short">KSCLC</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection
