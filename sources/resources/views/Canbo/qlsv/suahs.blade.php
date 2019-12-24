@extends('canbo.layout.index')
@section('content')
<div class="suahs-container">
	<p class="title">Sửa hồ sơ</p>
	<p class="label">Thông tin sinh viên</p>
	<form action="" method="">
		<div class="student-infor">
			<div class="field-block">
				<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
				<p>MSSV :</p>
				<p> 20151950</p>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Họ và tên :</p>
					<input type="text" value ="Nguyễn An Khang" name="">
				</div>
				<div class="text-field">
					<p>Bậc đào tạo :</p>
					<input type="text" value="Đại học" name="">
				</div>
				<div class="text-field">
					<p>Chương trình :</p>
					<input type="text" value="KSCLC" name="">
				</div>
				<div class="text-field">
					<p>Viện :</p>
					<input type="text" value="CNTT" name="">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Giới tính :</p>
					<input type="text" value="Nam" name="">
				</div>
				<div class="text-field">
					<p>Lớp :</p>
					<input type="text" value="HTTT&TT" name="">
				</div>
				<div class="text-field">
					<p>Khoá Học :</p>
					<input type="text" value="60" name="">
				</div>
				<div class="text-field">
					<p>Email :</p>
					<input type="text" value="nguyenankhang1505@gmail.com" name="">
				</div>
			</div>
		</div>
		<hr>
		<p class="label">Thông tin cá nhân</p>
		<div class="personal-infor">
			<div class="field-block-1">
				<div class="text-field">
					<p>Dân tộc :</p>
					<input type="text" value="Kinh" name="">
				</div>
				<div class="text-field">
					<p>Năm TN cấp 3 :</p>
					<input type="text" value="2015" name="">
				</div>
				<div class="text-field">
					<p>Đại chỉ :</p>
					<input type="text" value="Đại Cồ Việt" name="">
				</div>
				<div class="text-field">
					<p>Số CMND :</p>
					<input type="text" value="abcxyz" name="">
				</div>
			</div>
			<div class="field-block-1">
				<div class="text-field">
					<p>Tôn giáo :</p>
					<input type="text" value="Kinh" name="">
				</div>
				<div class="text-field">
					<p>Trường THPT :</p>
					<input type="text" value="THPT chuyên Đại học Vinh" name="">
				</div>
				<div class="text-field">
					<p>Hộ khẩu :</p>
					<input type="text" value="Nghệ An" name="">
				</div>
				<div class="text-field">
					<p>Số điện thoại :</p>
					<input type="text" value="0373445086" name="">
				</div>
			</div>
		</div>
		<button type="submit" class="edit-button">Lưu</button>
	</form>
</div>
@endsection