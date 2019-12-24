@extends('canbo.layout.index')
@section('content')
<div class="molop-container">
	<p class="title">Thêm lớp mới</p>
	<p class="label">Thông tin lớp học</p>
	<form action="canbo\qldkl\molop" method="POST">
		<input type="hidden" name="_token" value ="{{csrf_token()}}">
		<div class="infor">
			<div class="field-block">
				<div class="text-field">
					<p>Học phần :</p>
					<input type="text" name="maHocPhan">
				</div>
				<div class="text-field">
					<p>Chương trình :</p>
					<select name="maCT" style="height: 26px; width: 204px;">
						@foreach($ctdt as $ct)
							<option value='{{$ct->maCT}}'>{{$ct->tenCT}}</option>
						@endforeach
					</select>
				</div>
				<div class="text-field">
					<p>Viện :</p>
					<select name="maVien" style="height: 26px; width: 204px;">
						@foreach($vien as $v)
							<option value='{{$v->maVien}}'>{{$v->tenVien}}</option>
						@endforeach
					</select>
				</div>
				<div class="text-field">
					<p>Số lượng :</p>
					<input type="text" name="soLuong">
				</div>
			</div>
			<div class="field-block">
				<div class="text-field">
					<p>Tiết đầu :</p>
					<input type="text" name="tietDau">
				</div>
				<div class="text-field">
					<p>Tiết cuối :</p>
					<input type="text" name="tietCuoi">
				</div>
				<div class="text-field">
					<p>Thứ	 :</p>
					<input type="text" name="thu">
				</div>
				<div class="text-field">
					<p>Phòng học :</p>
					<input type="text" name="phongHoc">
				</div>
			</div>
		</div>
		<button type="submit" class="add-button">Thêm</button>
	</form>
</div>
@endsection