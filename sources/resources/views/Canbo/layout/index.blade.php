<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\home\home.css">

	<link rel="stylesheet" type="text/css" href="frontend\canbo\qld\lop\timkiem_lop.css">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\qld\lop\xemdiem_lop.css">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\qld\sv\timkiem_sv.css">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\qld\sv\xemdiem_sv.css">

	<link rel="stylesheet" type="text/css" href="frontend\canbo\qldkl\mo_lop.css">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\qldkl\sua_lop.css">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\qldkl\xem_lop.css">

	<link rel="stylesheet" type="text/css" href="frontend\canbo\qlsv\sua_hs.css">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\qlsv\themhs.css">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\qlsv\xem_hs.css">

	<link rel="stylesheet" type="text/css" href="frontend\canbo\qltkcn\xem_tkcn.css">
	<link rel="stylesheet" type="text/css" href="frontend\canbo\qltkcn\suatkcn.css">



</head>
<body>
	@include('canbo.layout.header')

	<!-- narbar-menu --> 

	<div class="content">
		@include('canbo.layout.menu')

		<!-- Page content -->
		@yield('content')
	</div>
</body>
</html>