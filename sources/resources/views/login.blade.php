<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="frontend\login\login.css">
</head>
<body>
	<div class="container" >
		<div class="div-form">
			<div class="header">
				<img src="">
				<p>WELCOME</p>
			</div>
			<div class="alert">
				@if(count($errors) > 0)
					<div class="alert-danger">
						@foreach($errors->all() as $err)
							{{$err}} <br>
						@endforeach
					</div>
				@endif

				@if(session('thongbao'))
					<div class="alert-danger">
						{{session('thongbao')}}
					</div>
				@endif
			</div>
			<form action="dangnhap" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<label>Tài khoản : </label>
				<input type="text" name="username">
				<label>Mật khẩu : </label>
				<input type="password" name="password">
				<button type="submit">Đăng nhập</button>
			</form>
		</div>
	</div>
</body>
</html>