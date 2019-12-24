@extends('admin.layout.index')

@section('content')
<div class="qlddk-container">
	<p class ="title">Quản lý đợt đăng ký</p>
			<form action="admin/modotdk" method="POST">
				<input type="hidden" name="_token" value ="{{csrf_token()}}">
				<button class="open" type="submit">Mở đợt đăng ký</button>
			</form>
			<form action="admin/dongdotdk" method="POST">
				<input type="hidden" name="_token" value ="{{csrf_token()}}">
				<button class="close" type="submit">Đóng đợt đăng ký</button>
			</form>

</div>
@endsection