<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

	<link rel="icon" href="{{ asset('assets/images/page/logo-icon.png') }}">
	<title>Cootranshuila - Inicio</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/framework7.bundle.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/framework7-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
	
	@yield('content')

	<!-- script -->
	<script src="{{ asset('assets/js/framework7.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/routes.js') }}"></script>
    
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/redireccion.js') }}"></script>
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<!-- end script -->

</body>
</html>