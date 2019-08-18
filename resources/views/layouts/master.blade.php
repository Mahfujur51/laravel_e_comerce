<!DOCTYPE html>
<html lang="en">
	@include('partials._header')
	<body>
	
	@include('partials._nav')
		@yield('content')

		@include('partials._footer')
		@include('partials._script')
	</body>
</html>