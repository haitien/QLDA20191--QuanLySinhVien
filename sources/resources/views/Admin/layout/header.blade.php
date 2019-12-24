<div class="header">
	<img src="Frontend\Image\image.PNG" width="185" class="image">
	<p class="heading">Hệ thống quản lý sinh viên</p>
	<a href="dangxuat" class="logout">[Đăng xuất]</a>
	@if(Auth::user())
		<div class="name">{{Auth::user()->hoTen}}</div>
	@endif
</div>