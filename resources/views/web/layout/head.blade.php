<!doctype html>
<html class="no-js" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Active Group</title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('webassests/assets/css/hover-min.css') }}">

    <link rel="stylesheet" href="{{ asset('webassests/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('webassests/assets/css/responsive.css') }}">
    @if (isset($canonical))
        <link rel="canonical" href="{{ $canonical }}" />
    @endif
    <link href="{{ asset('webassests/assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('webassests/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <style>
        #loadBtn:hover {
            color: #389A1B !important;
        }

        #loadBtnAdvice:hover {
            color: #389A1B !important;
        }

    </style>
    @yield('style')
</head>
