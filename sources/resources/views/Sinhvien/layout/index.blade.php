<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\home\home.css">

	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\qldkl\xemlop.css">
	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\qldkl\timkiemlop.css">
	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\qldkl\xemlopdk.css">

	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\qlhscn\suahscn.css">
	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\qlhscn\xemhscn.css">

	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\qltkcn\xem_tkcn.css">
	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\qltkcn\suatkcn.css">

	<link rel="stylesheet" type="text/css" href="frontend\sinhvien\xemdiem\xemdiem.css">



</head>
<body>
	@include('sinhvien.layout.header')

	<!-- narbar-menu --> 

	<div class="content">
		@include('sinhvien.layout.menu')

		<!-- Page content -->
		@yield('content')
	</div>
</body>
</html>