@extends('web.layout.web')
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>{{ __('links.blog') }}</h2>
                                <ul>
                                    <li class="breadcrumb-item"> <a
                                            href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a>
                                        <i class="fa fa-chevron-left"></i> <a href="#">{{ __('links.blogs') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row" dir="rtl">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 artical-block">

                                    <div class="single-post">
                                        <div class="feature-img">
                                            <div class="trends_image">
                                                <img src="{{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }}" alt="">
                                                <div class="trends_category">
                                                    <a href="#"><i class="fas fa-calendar-alt ml-1"></i>
                                                        {{ date('d-m-Y', strtotime($blog->blog_date)) }} </a>
                                                </div>
                                            </div>
                                            <div class="trends_content">

                                                <div class="trends_info clearfix">
                                                    <div class="trends_name">
                                                        <a>
                                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                                {!! $blog->title_en ?? '' !!}
                                                            @else
                                                                {!! $blog->title_ar ?? '' !!}
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_details text-right">
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $blog->text_en ?? '' !!}
                                            @else
                                                {!! $blog->text_ar ?? '' !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title"><span>{{ __('links.latest_News') }} </span></h3>
                                @foreach ($latestPlogs as $latest)
                                    <div class="media post_item">
                                        <img src="{{ asset('uploads/blogs') }}/{{ $latest->image ?? '' }}" alt="post">
                                        <div class="media-body">
                                            <a
                                                href="{{ LaravelLocalization::localizeUrl('/single-blog/' . $latest->id . '/' . $latest->slug) }}">
                                                <h3>
                                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                        {!! $latest->title_en ?? '' !!}
                                                    @else
                                                        {!! $latest->title_ar ?? '' !!}
                                                    @endif
                                                </h3>
                                            </a>
                                            <p>
                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {!! str_limit($latest->text_en ?? '', $limit = 50, $end = '...') !!}
                                                @else
                                                    {!! str_limit($latest->text_ar ?? '', $limit = 50, $end = '...') !!}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

        <section>
            <div class="trends">
                <div class="trends_background"></div>
                <div class="container">
                    <div class="row">
                        <!-- Trends Content -->
                        <div class="col-lg-3">
                            <div class="trends_container">
                                <h2 class="trends_title">{{ __('links.popular_blog') }}</h2>
                                <div class="trends_text">
                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                                        اللاتيني الكلاسيكي منذ العام قبل الميلاد مما أكثر من عام في القدم</p>
                                </div>
                                <div class="trends_slider_nav">
                                    <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                    <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- Trends Slider -->
                        <div class="col-lg-9">
                            <div class="trends_slider_container">

                                <!-- Trends Slider -->

                                <div class="owl-carousel owl-theme trends_slider">
                                    @foreach ($blogs as $blog)
                                        <!-- Trends Slider Item -->
                                        <div class="owl-item">
                                            <div class="trends_item is_new">
                                                <div
                                                    class="trends_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }}"
                                                        alt="">
                                                    <div class="trends_category">
                                                        <a
                                                            href="{{ LaravelLocalization::localizeUrl('/single-blog/' . $blog->id . '/' . $blog->slug) }}"><i
                                                                class="fas fa-calendar-alt ml-1"></i>{{ date('d-m-Y', strtotime($blog->blog_date)) }}</a>
                                                    </div>
                                                </div>
                                                <div class="trends_content">

                                                    <div class="trends_info clearfix">
                                                        <div class="trends_name">
                                                            <a
                                                                href="{{ LaravelLocalization::localizeUrl('/single-blog/' . $blog->id . '/' . $blog->slug) }}">
                                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                                    {!! $blog->title_en ?? '' !!}
                                                                @else
                                                                    {!! $blog->title_ar ?? '' !!}
                                                                @endif
                                                            </a>
                                                            <p>
                                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                                    {!! str_limit($blog->text_en ?? '', $limit = 100, $end = '...') !!}
                                                                @else
                                                                    {!! str_limit($blog->text_ar ?? '', $limit = 100, $end = '...') !!}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="dont-delete">
            <span class="custom_dropdown_placeholder clc"></span>
            <ul class="custom_list clc"></ul>
        </div>
    </main>
@endsection
