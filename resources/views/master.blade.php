<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
</head>
<body>

	
	@include('header')
	
	<!-- content -->
	<section>
		
		@yield('content')
	</section>
	<!-- end content -->
	<footer>
		@include('footer')
	</footer>

</body>
</html>