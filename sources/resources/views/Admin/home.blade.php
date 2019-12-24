@extends('admin.layout.index')
@section('content')
<div class="container">
	@if(session('thongbao'))
	<div class="alert-success">
		{{session('thongbao')}}
	</div>
	@endif
</div>
@endsection