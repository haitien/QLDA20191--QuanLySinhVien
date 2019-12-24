@extends('canbo.layout.index')
@section('content')
<div class="themhs-container">
	<p class="title">Thêm hồ sơ</p>
	<p class="label">Thông tin sinh viên</p>
	<form action="canbo\qlhssv\themhs" method="POST">
		<div class="student-infor">
			<div class="field-block">
				<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
				<p>MSSV :</p>
				<input type="text" name="">
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Họ và tên :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Bậc đào tạo :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Chương trình :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Viện :</p>
					<input type="text" name="">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Giới tính :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Lớp :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Khoá Học :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Email :</p>
					<input type="text" name="">
				</div>
			</div>
		</div>
		<hr>
		<p class="label">Thông tin cá nhân</p>
		<div class="personal-infor">
			<div class="field-block-1">
				<div class="text-field">
					<p>Dân tộc :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Năm TN cấp 3 :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Đại chỉ :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Số CMND :</p>
					<input type="text" name="">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Tôn giáo :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Trường THPT :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Hộ khẩu :</p>
					<input type="text" name="">
				</div>
				<div class="text-field">
					<p>Số điện thoại :</p>
					<input type="text" name="">
				</div>
			</div>
		</div>
		<button type="submit" class="add-button">Thêm</button>
	</form>
</div>
@endsection