<div class="navbar">
			<nav role="navigation" class="nav-menu">
				<div class="dropdown">
					<button class="text-block">Quản lý sinh viên</button>
					<nav class="dropdown-list">
						<a href="canbo\qlhssv\themhs" class="dropdown-link">Thêm hồ sơ sinh viên</a>
						<br>
						<a href="canbo\qlhssv\timkiemsv" class="dropdown-link">Tìm kiếm sinh viên</a>
					</nav>
				</div>
				<div class="dropdown">
					<button class="text-block">Quản lý điểm</button>
					<nav class="dropdown-list">
						<a href="canbo\qld\sv\timkiemsv" class="dropdown-link">Quản lý điểm sinh viên</a>
						<br>
						<a href="canbo\qld\lop\timkiemlop" class="dropdown-link">Quản lý điểm lớp học</a>
					</nav>
				</div>
				<div class="dropdown">
					<button class="text-block">Quản lý đăng ký lớp</button>
					<nav class="dropdown-list">
						<a href="canbo\qldkl\molop" class="dropdown-link">Thêm lớp mới</a> 
						<br>
						<a href="canbo\qldkl\timkiemlop" class="dropdown-link">Tìm kiếm lớp</a>
					</nav>
				</div>
				<div class="dropdown">
					<a href="canbo\qltkcn\xemtkcn\{{Auth::user()->username}}">
						<button class="text-block">Quản lý tài khoản cá nhân</button>
					</a>
				</div>
		</div>