@include('layouts.dash.header')


{{-- @include('layouts.handle.session') --}}

{{-- <div class="box-body"> --}}
@yield('content')
 {{-- </div> --}}


@include('layouts.dash.footer')
