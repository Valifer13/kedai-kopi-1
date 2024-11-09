<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" />
	<!-- End Google Fonts -->

	<!-- Contribute CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
	<!-- Contribute End CSS Files -->

	<!-- Custom CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
	<!-- Custom CSS Files -->

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.css') }}">
</head>

<body>
	@include('partials.navbar')
	<!-- Tambahkan komponen navbar -->

	@yield('content')
	<!-- Tempat untuk konten halaman -->

	@include('partials.footer')
</body>

</html>