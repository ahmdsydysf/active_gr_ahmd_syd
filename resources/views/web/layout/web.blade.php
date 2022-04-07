@include('web.layout.head')

<body class="body-bg">
    @include('web.layout.header')
    @yield('content')
    @include('web.layout.footer')

    @include('web.layout.footerscript')
