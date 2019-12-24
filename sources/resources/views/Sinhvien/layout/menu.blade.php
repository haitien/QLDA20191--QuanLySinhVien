<div class="navbar">
	<nav role="navigation" class="nav-menu">
		<div class="dropdown">
			<a href="sinhvien\qlhscn\xemhscn">
				<button class="text-block">Quản lý hồ sơ cá nhân</button>
			</a>
		</div>
		<div class="dropdown">
			<a href="sinhvien\xemdiem">
				<button class="text-block">Xem điểm</button>
			</a>
		</div>
		<div class="dropdown">
			<button class="text-block">Quản lý đăng ký lớp</button>
			<nav class="dropdown-list">
				<a href="sinhvien\qldkl\timkiemlop" class="dropdown-link">Tìm kiếm lớp </a>
				<br>
				<a href="sinhvien\qldkl\xemlopdk" class="dropdown-link">Xem lớp đã đăng ký</a>
			</nav>
		</div>
		<div class="dropdown">
			<a href="sinhvien\qltkcn\xemtkcn\{{Auth::user()->username}}">
				<button class="text-block">Quản lý tài khoản cá nhân</button>
			</a>
		</div>
</div>