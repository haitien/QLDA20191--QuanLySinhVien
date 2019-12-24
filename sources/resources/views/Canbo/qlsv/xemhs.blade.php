@extends('canbo.layout.index')
@section('content')
<div class="xemhs-container">
	<p class="title">Xem hồ sơ</p>
	<p class="label">Thông tin sinh viên</p>
	<div class="student-infor">
		<div class="field-block">
			<img src="Frontend\Image\avatar.png" height="204" class="infor-image">
			<p>MSSV : </p>
			<p> 20151950</p>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Họ và tên :</p>
				<p>Nguyễn An Khang</p>
			</div>
			<div class="text-field">
				<p>Bậc đào tạo :</p>
				<p>Đại học</p>
			</div>
			<div class="text-field">
				<p>Chương trình :</p>
				<p>KSCLC</p>
			</div>
			<div class="text-field">
				<p>Viện :</p>
				<p>CNTT</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Giới tính :</p>
				<p>Nam</p>
			</div>
			<div class="text-field">
				<p>Lớp :</p>
				<p>HTTT&TT</p>
			</div>
			<div class="text-field">
				<p>Khoá Học :</p>
				<p>K60</p>
			</div>
			<div class="text-field">
				<p>Email :</p>
				<p>nguyenankhang1505@gmail.com</p>
			</div>
		</div>
	</div>
	<hr>
	<p class="label">Thông tin cá nhân</p>
	<div class="personal-infor">
		<div class="field-block-1">
			<div class="text-field">
				<p>Dân tộc :</p>
				<p>Kinh</p>
			</div>
			<div class="text-field">
				<p>Năm TN cấp 3 :</p>
				<p>2015</p>
			</div>
			<div class="text-field">
				<p>Đại chỉ :</p>
				<p>Số 41 ngõ 27 Đại Cồ Việt</p>
			</div>
			<div class="text-field">
				<p>Số CMND :</p>
				<p>187517382</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Tôn giáo :</p>
				<p>Không</p>
			</div>
			<div class="text-field">
				<p>Trường THPT :</p>
				<p>THPT chuyên Đại học Vinh</p>
			</div>
			<div class="text-field">
				<p>Hộ khẩu :</p>
				<p>Nghệ An</p>
			</div>
			<div class="text-field">
				<p>Số điện thoại :</p>
				<p>0373445086</p>
			</div>
		</div>
	</div>
	<hr>
	<p class="label">Thông tin học tập</p>
	<div class="personal-infor">
		<div class="field-block-1">
			<div class="text-field">
				<p>Tổng kết học kỳ :</p>
				<p>20171</p>
			</div>
			<div class="text-field">
				<p>Điểm tích luỹ :</p>
				<p>2.8</p>
			</div>
			<div class="text-field">
				<p>Số TC nợ đăng ký :</p>
				<p>2</p>
			</div>
		</div>
		<div class="field-block-1">
			<div class="text-field">
				<p>Tín chỉ tích luỹ :</p>
				<p>120</p>
			</div>
			<div class="text-field">
				<p>Trình độ học vấn :</p>
				<p>3</p>
			</div>
			<div class="text-field">
				<p>Mức cảnh cáo :</p>
				<p>M0</p>
			</div>
		</div>
	</div>
	<div class="button">
		<a href="canbo\qlhssv\suahs">
			<button type="submit" class="edit-button">Sửa</button>
		</a>
		<form action="canbo\qlhssv\xoahs">
			<button type="submit" class="del-button">Xoá</button>
		</form>
	</div>
	<div style="clear:both"></div>
</div>
@endsection