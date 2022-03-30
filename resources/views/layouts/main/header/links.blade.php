<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>@yield('page_title')</title>
	<meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{ asset('css/main/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/slicknav.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/animate.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/nice-select.css')}}">
	<link rel="stylesheet" href="{{ asset('css/main/hover-min.css')}}">

	<link rel="stylesheet" href="{{ asset('css/main/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main/responsive.css')}}">

	<link href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">

	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


@yield("custom_style")


</head>

<body class="body-bg">
