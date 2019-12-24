<div class="navbar">
	<nav role="navigation" class="nav-menu">
		<div class="dropdown">
			<button class="text-block">Quản lý tài khoản</button>
			<nav class="dropdown-list">
				<a href="admin\qltk\themtk" class="dropdown-link">Thêm tài khoản</a>
				<br>
				<a href="admin\qltk\timkiemtk" class="dropdown-link">Tìm kiếm tài khoản</a>
			</nav>
		</div>
		<div class="dropdown">
			<a href="admin\qlddk">
				<button class="text-block">Quản lý đợt đăng ký</button>
			</a>
		</div>
		<div class="dropdown">
			<a href="admin\qltkcn\xemtkcn\{{Auth::user()->username}}">
				<button class="text-block">Quản lý tài khoản cá nhân</button>
			</a>
		</div>
	</nav>
</div>