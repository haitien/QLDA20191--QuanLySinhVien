@extends('sinhvien.layout.index')
@section('content')
<div class="xemlop-container">
	<p class="title">Xem thông tin lớp</p>
	<p class="label">Thông tin lớp học</p>
	<div class="infor">
		<div class="field-block">
			<div class="text-field">
				<p>Học phần :</p>
				<p class="detail">{{$lophoc->hocphan->tenHocPhan}}</p>
			</div>
			<div class="text-field">
				<p>Mã HP :</p>
				<p class="detail">{{$lophoc->hocphan->maHocPhan}}</p>
			</div>
			<div class="text-field">
				<p>Chương trình :</p>
				<p class="detail"></p>
			</div>
			<div class="text-field">
				<p>Viện :</p>
				<p class="detail">{{$lophoc->hocphan->vien->tenVien}}</p>
			</div>
			<div class="text-field">
				<p>Số lượng :</p>
				<p class="detail">{{$sl}}/{{$lophoc->soLuong}}</p>
			</div>
		</div>
		<div class="field-block">
			<div class="text-field">
				<p>Mã lớp :</p>
				<p class="detail">{{$lophoc->maLop}}</p>
			</div>
			<div class="text-field">
				<p>Thời lượng :</p>
				<p class="detail">{{$lophoc->hocphan->soTuan}}</p>
			</div>
			<div class="text-field">
				<p>Thời gian :</p>
				<p class="detail"></p>
			</div>
			<div class="text-field">
				<p>Thứ	 :</p>
				<p class="detail">5</p>
			</div>
			<div class="text-field">
				<p>Phòng học :</p>
				<p class="detail">D6-205</p>
			</div>
		</div>
	</div>
	<div class="button">
		@if(!isset($diem_sv))
			<form action="sinhvien\qldkl\dangkylop\{{$lophoc->maLop}}" method="POST">
				<input type="hidden" name="_token" value ="{{csrf_token()}}">
				<button type="submit" class="regis-button">Đăng ký</button>
			</form>
		@else
			<button type="" class="regis-button">Đã đăng ký</button>
		@endif
	</div>
</div>
@endsection