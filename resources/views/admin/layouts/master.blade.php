<!DOCTYPE html>
<html lang="en">
@include('admin.partials._header')
<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		@include('admin.partials/_topnavbar')
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			@include('admin.partials._navbar')
			<!-- partial -->
			<div class="main-panel">
				@yield('content')
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				@include('admin.partials._footer')
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	@include('admin.partials._script');
</body>
</html>
