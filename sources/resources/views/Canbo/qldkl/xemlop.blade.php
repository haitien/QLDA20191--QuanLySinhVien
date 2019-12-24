@extends('canbo.layout.index')
@section('content')
<div class="xemlop-container">
	<p class="title">Xem thông tin lớp</p>
	<p class="label">Thông tin lớp học</p>
	<div class="infor">
		<div class="field-block">
			<div class="text-field">
				<p>Học phần :</p>
				<p class="detail" style="width: 270px;">{{$lophoc->hocphan->tenHocPhan}}</p>
			</div>
			<div class="text-field" >
				<p>Mã HP :</p>
				<p class="detail" style="width: 270px;">{{$lophoc->maHocPhan}}</p>
			</div>
			<div class="text-field">
				<p>Chương trình :</p>
				<p class="detail" style="width: 270px;"></p>
			</div>
			<div class="text-field">
				<p>Viện :</p>
				<p class="detail" style="width: 270px;">{{$lophoc->hocphan->vien->tenVien}}</p>
			</div>
			<div class="text-field">
				<p>Số lượng :</p>
				<p class="detail" style="width: 270px;">{{$sl}}/{{$lophoc->soLuong}}</p>
			</div>
		</div>
		<div class="field-block" style="width: 500px;">
			<div class="text-field"  style="margin-left: 150px;">
				<p >Mã lớp :</p>
				<p class="detail">{{$lophoc->maLop}}</p>
			</div>
			<div class="text-field"  style="margin-left: 150px;">
				<p>Thời lượng :</p>
				<p class="detail">{{$lophoc->hocphan->soTuan}}</p>
			</div>
			<div class="text-field"  style="margin-left: 150px;">
				<p>Thời gian :</p>
				<p class="detail">
					@foreach($lich as $l)
						{{-- {{var_dump($l)}} --}}
						{{$l->tietDau}} - {{$l->tietCuoi}}
					@endforeach
				</p>
			</div>
			<div class="text-field"  style="margin-left: 150px;">
				<p>Thứ :</p>
				<p class="detail">
					@foreach($lich as $l)
						{{$l->thu}}
					@endforeach
				</p>
			</div>
			<div class="text-field"  style="margin-left: 150px;">
				<p>Phòng học :</p>
				{{-- <p class="detail">{{$lophoc->lichhoc->maPhong}}</p> --}}
			</div>
		</div>
	</div>
	<div class="button">
		<a href="canbo\qldkl\sualop" >
			<button type="submit" class="edit-button">Sửa</button>
		</a>
		<form action="canbp\qldkl\xoalop">
			<button type="submit" class="del-button">Xoá</button>
		</form>
	</div>
	<div style="clear:both"></div>
</div>
@endsection
