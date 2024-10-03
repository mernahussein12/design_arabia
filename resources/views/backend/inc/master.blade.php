<!doctype html>
<html lang="en">

@include('backend.inc.head')

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        @include('backend.inc.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
	    @include('backend.inc.header')
		<!--end header -->
		<!--start page wrapper -->
        @yield('content')
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('backend.inc.footer')
	</div>
	<!--end wrapper-->

	<!-- search modal -->
    @include('backend.inc.search')
   <!-- end search modal -->

	<!--start switcher-->
	@include('backend.inc.switcher')
	<!--end switcher-->
	<!-- Bootstrap JS -->
	@include('backend.inc.script')
</body>

</html>