<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">

	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Site Title -->
	<title>{{ config('app.name') }}</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<link rel="stylesheet" href="/css/linearicons.css">
		<link rel="stylesheet" href="/css/owl.carousel.css">
		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/nice-select.css">
		<link rel="stylesheet" href="/css/magnific-popup.css">
		{{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}
		<link rel="stylesheet" href="{{ mix("css/app.css") }}">
		<link rel="stylesheet" href="{{ mix("css/main.css") }}">

		
		
	</head>
	<body>
        <div class="oz-body-wrap">
            
            @include('layout.header')
            
            @yield('content')
			
			@if (! in_array(Route::currentRouteName(), ['login', 'register', 'password.reset',
			'password.email', 'password.update', 'password.request']))
				@include('layout.contact')
				@include('layout.footer')
			@endif
			
        </div>

		<script src="/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		{{-- <script src="/js/vendor/bootstrap.min.js"></script> --}}
		<script src="/js/jquery.ajaxchimp.min.js"></script>
		<script src="/js/owl.carousel.min.js"></script>
		<script src="/js/jquery.nice-select.min.js"></script>
		<script src="/js/jquery.magnific-popup.min.js"></script>
		<script src="/js/jquery.counterup.min.js"></script>
		<script src="/js/waypoints.min.js"></script>
		<script src="/js/main.js"></script>
		<script src="/js/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.dev.js"></script>
		<script src="{{ mix('/js/socket.js') }}"></script>
		@yield('footer-js')
	</body>
</html>
