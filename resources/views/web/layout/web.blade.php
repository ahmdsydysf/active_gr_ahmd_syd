@include('web.layout.head')

<body @if( LaravelLocalization::getCurrentLocale() === "en")
class="body-bg en"
@else
class="body-bg ar"
@endif >
    @include('web.layout.header')
    @yield('content')
    @include('web.layout.footer')

    @include('web.layout.footerscript')
