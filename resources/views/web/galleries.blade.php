@extends('web.layout.web')
@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area2 welcome-image-shape hero-overly2">
        <div class="slider-height2  d-flex align-items-center" background>

            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>  {{ __('links.gallery') }}</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a
                                        href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a>
                                    <i class="fa fa-chevron-left"></i> <a href="#">{{ __('links.gallery') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- Hero End -->
    <!-- Gallary -->

    <section class="contact-section exp-contact">
        <div class="container">
            <section>
                <h3 class="filter-links mb-5">
                    <ul class="row" dir="rtl">
                        <li class="list col active" data-filter="all">كل الصور</li>
                        @foreach ($categories as $row)


                        <li class="list col" data-filter="sec.{{ $row->id }}" onclick="stoping()">{{ $row->category_ar ?? '' }}
                        </li>

                    @endforeach
                        {{-- <li class="list col" data-filter="sec1">منتجات زراعية</li>
                        <li class="list col" data-filter="sec2">اسمدة</li>
                        <li class="list col" data-filter="sec3">موبيدات</li>
                        <li class="list col" data-filter="sec4">منتجات زراعية</li>
                        <li class="list col" data-filter="sec5">اسمدة</li> --}}
                        <li class="list col" data-filter="video" onclick="stoping()"><i class="fa fa-play"></i></li>
                        {{-- <li class="list col" data-filter="sec6">فيديوهات</li> --}}
                    </ul>
                </h3>

                <div class="product">
                    @foreach ($galleries as $row)
                    @if ($row->type == 1)
                    <div class="itemBox  " data-item="sec.{{ $row->category_id  }}">
                        <img src="{{ asset('uploads/galleries') }}/{{ $row->path }}"></div>
                        @else
                        <div class="itemBox " data-item="video">
                            <iframe src="{{ $row->path }}" style=" width: 100%;
                                height: 100%;
                                position: absolute;
                                object-fit: cover;
                                z-index: 0;" frameborder="0"></iframe>
                        </div>
    @endif
                    @endforeach




            </section>

        </div>
    </section>

    <script>

    </script>
</main>
@endsection
@section('scripts')
<script>
$(function(){
    $('.bg-cat1').click(function(){
        $('iframe').attr('src', $('iframe').attr('src'));
    });
    $('.bg-cat2').click(function(){
        $('iframe').attr('src', $('iframe').attr('src'));
    });
});
</script>

@endsection
