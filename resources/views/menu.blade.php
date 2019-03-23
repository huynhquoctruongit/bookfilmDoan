<nav class="navbar navbar-expand-sm bg-white bg-white rounded reset_p_m">
	<!-- Brand -->
	<!-- Links -->
	<ul class="navbar-nav flex-column blacktext w-100">
		<button class="btn bg-primary text-center">
			<i class="fas fa-bars"></i> Danh Mục Sản Phẩm</button>

			<!-- <li class="ds-top">danhmucsp</li> -->
			<!-- Dropdown -->
			@foreach($loai_sach as $loai)
			<li class="nav-item dropright pl-1">
				<a class="nav-link" href="{{route('loaisach',$loai->id)}}">
					<img src="source/images/bookicon.jpg">
					{{$loai->name}}          
				</a>
				
			</li>
			@endforeach

		</ul>

	</nav>