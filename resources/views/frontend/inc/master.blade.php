<!DOCTYPE html>
<html lang="en">

@include('frontend.inc.head')

<body class="ori-digital-studio">
{{--	<div id="preloader"></div>--}}
{{--	<div class="up">--}}
{{--		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>--}}
{{--	</div>--}}
	<div class="cursor"></div>
<!-- Start of header section
	============================================= -->

    @include('frontend.inc.header')


<!-- End of header section
	============================================= -->

 {{-- Start of Slider section --}}

@yield('content')

 {{-- End of Blog section --}}


<!-- Start of Footer section
	============================================= -->
	@include('frontend.inc.footer')
<!-- End of Footer section
	============================================= -->

	<!-- For Js Library -->
	@include('frontend.inc.script')
</body>
</html>
