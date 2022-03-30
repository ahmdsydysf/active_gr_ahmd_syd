@extends('layouts.main.main_layout')


@section('page_title' , 'Gallary')


@section('content')
    <!--? Hero Start -->
    <div class="slider-area2 welcome-image-shape hero-overly2">
        <div class="slider-height2  d-flex align-items-center" background>

            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>معرض الصور والفيديوهات</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="#">الرئيسية</a> <i
                                        class="fa fa-chevron-left"></i> <a href="#">معرض الصور والفيديوهات</a> </li>
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
                        <li class="list col" data-filter="sec1">منتجات زراعية</li>
                        <li class="list col" data-filter="sec2">اسمدة</li>
                        <li class="list col" data-filter="sec3">موبيدات</li>
                        <li class="list col" data-filter="sec4">منتجات زراعية</li>
                        <li class="list col" data-filter="sec5">اسمدة</li>
                        <li class="list col" data-filter="sec6">فيديوهات</li>
                    </ul>
                </h3>
                <style>

                </style>
                <div class="product">
                    <div class="itemBox  " data-item="sec2"><img src="{{asset('images/02.png')}}"></div>
                    <div class="itemBox " data-item="sec3"><img src="{{asset('images/03.png')}}"></div>
                    <div class="itemBox " data-item="sec4"><img src="{{asset('images/04.png')}}"></div>
                    <div class="itemBox " data-item="sec5"><img src="{{asset('images/05.png')}}"></div>
                    <div class="itemBox " data-item="sec6">
                        <img src="{{asset('images/06.png')}}">
                        <a class="play-btn video-view" href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>

                    </div>
                    <div class="itemBox " data-item="sec1"><img src="{{asset('images/02.png')}}"></div>
                    <div class="itemBox " data-item="sec2"><img src="{{asset('images/03.png')}}"></div>
                    <div class="itemBox " data-item="sec3"><img src="{{asset('images/06.png')}}"></div>
                    <div class="itemBox " data-item="sec4"><img src="{{asset('images/07.png')}}"></div>
                    <div class="itemBox " data-item="sec5"><img src="{{asset('images/05.png')}}"></div>
                    <div class="itemBox " data-item="sec6">
                        <img src="{{asset('images/03.png')}}">
                        <a class="play-btn video-view" href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>
                    </div>
                    <div class="itemBox " data-item="sec1"><img src="{{asset('images/04.png')}}"></div>
                    <div class="itemBox " data-item="sec2"><img src="{{asset('images/02.png')}}"></div>
                    <div class="itemBox " data-item="sec3"><img src="{{asset('images/01.png')}}"></div>
                    <div class="itemBox " data-item="sec4"><img src="{{asset('images/07.png')}}"></div>
                    <div class="itemBox " data-item="sec5"><img src="{{asset('images/07.png')}}"></div>
                    <div class="itemBox " data-item="sec6">
                        <img src="{{asset('images/08.png')}}">
                        <a class="play-btn video-view" href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>
                    </div>
                    <div class="itemBox " data-item="sec1"><img src="{{asset('images/09.png')}}"></div>
                    <div class="itemBox " data-item="sec2"><img src="{{asset('images/06.png')}}"></div>
                    <div class="itemBox " data-item="sec3"><img src="{{asset('images/07.png')}}"></div>
                    <div class="itemBox " data-item="sec4"><img src="{{asset('images/05.png')}}"></div>
                    <div class="itemBox " data-item="sec5"><img src="{{asset('images/04.png')}}"></div>
                    <div class="itemBox " data-item="sec6">
                        <img src="{{asset('images/03.png')}}">
                        <a class="play-btn video-view" href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>
                    </div>
                    <div class="itemBox " data-item="sec1"><img src="{{asset('images/01.png')}}"></div>
            </section>

        </div>
    </section>
    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                </a>
            </li>
            <li class="page-item active">
                <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Gallary -->

@endsection

@section('custom_script')
    <script>
        $(document).ready(function () {

            $("#owl-demo").owlCarousel({
                navigation: true,
                items: 1,
                loop: true,
                nav: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
            });


        });
    </script>
@endsection
