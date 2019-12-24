@extends('canbo.layout.index')
@section('content')
<div class="timkiemsv-container">
	<p class="title">Tìm kiếm sinh viên </p>
	<div class="div-search">
		<form action="canbo\qlhssv\timkiemsv" method="POST">
			<input type="text" placeholder="Nhập từ khoá" name="">
			<select >
				<option value="MSSV">MSSV</option>
				<option value="Ten">Họ Tên</option>
				<option value="Lop">Lớp</option>
			</select>
			<button type="submit">Tìm</button>
		</form>
	</div>
	<table class="result-table">
		<thead>
			<tr>
				<th class="long">Họ và tên</th>
				<th class="short">MSSV</th>
				<th class="short">Lớp</th>
				<th class="short">Khoá</th>
			</tr>
		</thead>
		<tbody class="element">
			<tr>
				<td class="long">Nguyễn An Khang</td>
				<td class="short">20151950</td>
				<td class="short">KSCLC</td>
				<td class="short">K60</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection
