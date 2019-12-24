@extends('canbo.layout.index')
@section('content')
<div class="sualop-container">
	<p class="title">Thêm lớp mới</p>
	<p class="label">Thông tin lớp học</p>
	<form action="" method="">
		<div class="infor">
			<div class="field-block">
				<div class="text-field">
					<p>Học phần :</p>
					<input type="text" value="Phân tích thiết kế" name="">
				</div>
				<div class="text-field">
					<p>Chương trình :</p>
					<input type="text" value="KSCLC" name="">
				</div>
				<div class="text-field">
					<p>Viện :</p>
					<input type="text" value="CNTT" name="">
				</div>
				<div class="text-field">
					<p>Số lượng :</p>
					<input type="text" value="19" name="">
				</div>
			</div>
			<div class="field-block">
				<div class="text-field">
					<p>Thời lượng :</p>
					<input type="text" value="15 tuần" name="">
				</div>
				<div class="text-field">
					<p>Thời gian :</p>
					<input type="text" value="12h30-16h00" name="">
				</div>
				<div class="text-field">
					<p>Thứ	 :</p>
					<input type="text" value="5" name="">
				</div>
				<div class="text-field">
					<p>Phòng học :</p>
					<input type="text" value="D6205" name="">
				</div>
			</div>
		</div>
		<button type="submit" class="add-button">Lưu</button>
	</form>
</div>
@endsection