@extends('canbo.layout.index')
@section('content')
<div class="xemdiemsv-container">
	<p class="title">Bảng điểm sinh viên :   {{$sv->taikhoan->hoTen}} </p>
	<table class="result-table">
		<thead>
			<tr>
				<th class="short">Học kỳ</th>
				<th class="short">Mã HP</th>
				<th class="long">Tên HP</th>
				<th class="short">TC</th>
				<th class="short">Mã lớp</th>
				<th class="short">Điểm QT</th>
				<th class="short">Điểm thi</th>
				<th class="short">Điểm chữ</th>
			</tr>
		</thead>
		<tbody class="element">
			@foreach($bangdiem as $diem)
				<tr>
					<td class="short">{{$diem->lophoc->maHocKy}}</td>
					<td class="short">{{$diem->lophoc->hocphan->maHocPhan}}</td>
					<td class="long">{{$diem->lophoc->hocphan->tenHocPhan}}</td>
					<td class="short">{{$diem->lophoc->hocphan->soTC}}</td>
					<td class="short">{{$diem->lophoc->maLop}}</td>
					<td class="short" id="cell-edit-qt-{{$diem->id}}" >
					<p id="before-edit-qt-{{$diem->id}}" style="margin: 0;" >{{$diem->diemQT}}</p>
					<form action="canbo\qld\sv\suadiem\{{$sv->maSV}}\qt\{{$diem->id}}" method="POST">
						<input type="hidden" name="_token" value ="{{csrf_token()}}">
						<input type="text" id="edit-qt-{{$diem->id}}" style="display: none; width: 100%;" name="diemQT" >
						<button type="submit" id="button-qt-{{$diem->id}}" onclick="javascript: return confirm('Xác nhận');" href="" style="display: none; margin-left: 25px;">Lưu</button>
					</form>
					</td>
					<td class="short" id="cell-edit-ck-{{$diem->id}}" >
					<p id="before-edit-ck-{{$diem->id}}" style="margin: 0;">{{$diem->diemCK}}</p>
					<form action="canbo\qld\sv\suadiem\{{$sv->maSV}}\ck\{{$diem->id}}" method="POST">
						<input type="hidden" name="_token" value ="{{csrf_token()}}">
						<input type="text" id="edit-ck-{{$diem->id}}" name="diemCK" style="display: none; width: 100%;" >
						<button type="submit" id="button-ck-{{$diem->id}}" onclick="javascript: return confirm('Xác nhận');" href="" style="display: none; margin-left: 25px;">Lưu</button>	
					</form>
					</td>
					<td class="short">{{$diem->diemChu}}</td>
					<script type="text/javascript">
						var id1=document.getElementById("cell-edit-qt-{{$diem->id}}");
						id1.addEventListener('click', function(){
							document.getElementById("before-edit-qt-{{$diem->id}}").style.display = "none";
							document.getElementById("edit-qt-{{$diem->id}}").style.display="block";
							document.getElementById("edit-qt-{{$diem->id}}").focus();
							document.getElementById("button-qt-{{$diem->id}}").style.display="block"
						});
						document.getElementById("button-qt-{{$diem->id}}").addEventListener('click', function() {
							document.getElementById("edit-qt-{{$diem->id}}").style.display="none";
							document.getElementById("before-edit-qt-{{$diem->id}}").style.display = "block";
							document.getElementById("button-qt-{{$diem->id}}").style.display="none";
						});
						var id2=document.getElementById("cell-edit-ck-{{$diem->id}}");
						id2.addEventListener('click', function(){
							document.getElementById("before-edit-ck-{{$diem->id}}").style.display = "none";
							document.getElementById("edit-ck-{{$diem->id}}").style.display="block";
							document.getElementById("edit-ck-{{$diem->id}}").focus();
							document.getElementById("button-ck-{{$diem->id}}").style.display="block"
						});
						document.getElementById("button-ck-{{$diem->id}}").addEventListener('click', function() {
							document.getElementById("edit-ck-{{$diem->id}}").style.display="none";
							document.getElementById("before-edit-ck-{{$diem->id}}").style.display = "block";
							document.getElementById("button-ck-{{$diem->id}}").style.display="none"
						});
					</script>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection