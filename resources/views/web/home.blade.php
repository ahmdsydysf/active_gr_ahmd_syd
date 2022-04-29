@extends('web.layout.web')
@section('content')
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="bottom-shape">

            </div>
            <div class="slider-active ">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div id="overlay"></div>
                    <div class="container">



                        <div class="row dir" >
                            <div class="col-xl-8 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".5s" class="text-dir">
                                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {!! $singleSlide->title_en !!}
                                        @else
                                            {!! $singleSlide->title_ar !!}
                                        @endif
                                        <br />

                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".9s">
                                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {!! $singleSlide->text_en !!}
                                        @else
                                            {!! $singleSlide->text_ar !!}
                                        @endif
                                    </p> <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                        <a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="btn hero-btn">{{ __('links.show_more') }}</a>
                                        <a href="{{ LaravelLocalization::localizeUrl('/contact') }}" class="btn hero-btn2">{{ __('links.contact_us') }} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                @foreach ($homeSliders as $slider)
                    <div class="single-slider slider-height d-flex align-items-center">
                        <div id="overlay"></div>
                        <div class="container">
                            <div class="row dir">
                                <div class="col-xl-8 col-lg-7 col-md-8">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInLeft" data-delay=".5s" class="text-dir">
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $slider->title_en !!}
                                            @else
                                                {!! $slider->title_ar !!}
                                            @endif
                                            <br />

                                        </h1>
                                        <p data-animation="fadeInLeft" data-delay=".9s">
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $slider->text_en !!}
                                            @else
                                                {!! $slider->text_ar !!}
                                            @endif
                                        </p>
                                        <!-- Hero-btn -->
                                        <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                            <a href="industries.html" class="btn hero-btn">{{ __('links.show_more') }}</a>
                                            <a class="btn hero-btn2"> {{ __('links.contact_us') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- slider Area End-->

        <section class="sec-gap">
            <div class="container">
                <div class="row dir" >
                    <div class="col-lg-6">
                        <div class="about_img">
                            <img src="images/1.png" alt="">
                            <div class="exp"> {{ __('links.ten_years') }} </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <div class="sec-about">
                                <h3 class="about-head">{{ __('links.about_us') }} </h3>
                                <div class="about_title">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {!! $company->slog_en ?? '' !!}
                                @else
                                    {!! $company->slog_ar ?? '' !!}
                                @endif    </div>
                                <div class="about_text text-dir">
                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                        <p class="text-justify">
                                            {!! $company->overview_en !!}
                                        </p>
                                    @else
                                        <p>
                                            {!! $company->overview_ar !!}
                                        </p>
                                    @endif
                                </div>
                                <div class="row mt-10 dir">
                                    <div class="col-lg-6">
                                        <ul class="text-dir">
                                            @foreach ($whyRows as $index => $whyRow)
                                                @if ($index <= 2)
                                                    <li><i class="fas fa-arrow-circle-left"></i>
                                                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                            {!! $whyRow->name_en !!}
                                                        @else
                                                            {!! $whyRow->name_ar !!}
                                                        @endif
                                                    </li>
                                                @else
                                                @break
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="text-dir">
                                        @foreach ($whyRows as $index => $whyRow)
                                            @if ($index > 2)
                                                <li><i class="fas fa-arrow-circle-left"></i>
                                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                        {!! $whyRow->name_en !!}
                                                    @else
                                                        {!! $whyRow->name_ar !!}
                                                    @endif
                                                </li>
                                            @else
                                                @continue
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="clients_btn"><a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="btn hero-btn" tabindex="0">{{ __('links.show_more') }}</a></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sec-gap trends">
        <img src="images/Handdrawn Tropical Leaf2.svg" alt="" srcset="" class="leaf-bg">
        <div class="trends_background"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title clr-green">{{ __('links.fertilizers') }}</h2>
                        <div class="trends_text">
                            <p class="text-dir">
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                            {{ $fertilizer->description_en }}
                                                        @else
                                                            {{ $fertilizer->description_ar }}
                                                        @endif
                            </p>
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

                            <!-- Trends Slider Item -->
                            @foreach ($products_Fertilizers as $product)
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{ asset('uploads/product_types') }}/{{ $product->image ?? '' }}"
                                                alt="">
                                        </div>
                                        <div class="trends_content clr-green">
                                            <div class="trends_info clearfix">
                                                <div class="trends_name text-dir">
                                                    <a>
                                                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                            {{ $product->type_en }}
                                                        @else
                                                            {{ $product->type_ar }}
                                                        @endif
                                                    </a>
                                                    <p class="text-dir">
                                                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                            {{ $product->description_en }}
                                                        @else
                                                            {{ $product->description_ar }}
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


    <div class="sec-gap reviews bg-1">
        <span class="top-bg">
            <img src="images/shape.png" alt="" srcset="">
        </span>
        <span class="bottom-bg">
            <img src="images/shape.png" alt="" srcset="">
        </span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="head_title"> {{ __('links.why_us') }} ؟</div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                        الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="reviews_slider_container reviews_slider_nav">
                        <div class="reviews_prev reviews_nav"><i class="fas fa-angle-left ml-auto"></i>
                        </div>
                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider ">




                            @foreach ($whyRows as $whyRow)
                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div class="review_image">
                                            <img src="{{ asset('uploads/why_us') }}/{{ $whyRow->logo ?? '' }}" alt="">
                                        </div>
                                    </div>
                                    <div class="rev-content">
                                        <h3>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {!! $whyRow->name_en !!}
                                        @else
                                            {!! $whyRow->name_ar !!}
                                        @endif </h3>
                                        <p> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {!! $whyRow->text_en !!}
                                        @else
                                            {!! $whyRow->text_ar !!}
                                        @endif</p>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <div class="reviews_next reviews_nav"><i class="fas fa-angle-right ml-auto"></i>
                        </div>
                        <div class="reviews_dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sec-gap blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="head_title">{{ __('links.pesticides') }}</div>
                    <div class="head_text"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                        {{ $pesticide->description_en }}
                    @else
                        {{ $pesticide->description_ar }}
                    @endif</div>
                </div>
            </div>
            <div class="row dir" >
                @foreach ($products_pesticides as $product)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="">
                        <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                                src="{{ asset('uploads/product_types') }}/{{ $product->image ?? '' }}" alt=""></div>
                        <div class="pro_title text-dir">
                            <a href="#"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $product->type_en }}
                            @else
                                {{ $product->type_ar }}
                            @endif</a>
                        </div>
                        <div class="pro_content">
                            <p class="text-dir"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $product->description_en }}
                            @else
                                {{ $product->description_ar }}
                            @endif</p>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>

    <div class="sec-gap pro-sec">

        <div class="row">
            <div class="col-lg-6 p-5">
                <div class="pro-text">
                    @isset ($products_growth[0])

                    <div class="clients_title text-dir">
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $products_growth[0]->type_en }}
                            @else
                                {{ $products_growth[0]->type_ar }}
                            @endif
                            </div>
                            <div class="clients_text text-dir">
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $products_growth[0]->description_en }}
                            @else
                                {{ $products_growth[0]->description_ar }}
                            @endif
   </div>
   @endisset

                    <div class="clients_btn"><a href="{{ LaravelLocalization::localizeUrl('/growProduct') }}" class="btn hero-btn" tabindex="0">{{ __('links.show_more') }}</a></div>
                </div>
            </div>
            <div class="col-lg-6 pr-no">
                <div class="sec-img">
                    <img src="images/05.png" alt="">
                </div>
            </div>
        </div>

    </div>

    <div class="sec-gap testimonial-area testimonial-padding">
        <div class="scnd-leaf">
            <img src="images/Latest post.svg" alt="">
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 pb-30">
                    <div class="head_title"> {{ __('links.customer_feedback') }} </div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً بل إن له جذور في الأدب اللاتيني
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="h1-testimonial-active">
                        @foreach($feedBacks as $feedback)
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="testimonial-caption ">
                                        <div
                                            class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src="{{asset('uploads/feedback')}}/{{$feedback->image ?? ''}}" alt="">
                                            </div>
                                        </div>
                                        <div class="founder-text">
                                            <span> @if( LaravelLocalization::getCurrentLocale() === "en")
                                                {{$feedback->name_en}}
                                                @else
                                                {{$feedback->name_ar}}
                                                @endif  </span>
                                            <p>@if( LaravelLocalization::getCurrentLocale() === "en")
                                                {{$feedback->position_en}}
                                                @else
                                                {{$feedback->position_ar}}
                                                @endif  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8  col-md-12 rev-text text-dir">@if( LaravelLocalization::getCurrentLocale() === "en")
                                    {{$feedback->feedback_en}}
                                    @else
                                    {{$feedback->feedback_ar}}
                                    @endif</div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="sec-gap trends">
        <div class="trends_background"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title text-dir">{{ __('links.blogs') }}</h2>
                        <div class="trends_text">
                            <p class="text-dir">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
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
                                <div class="trends_item">
                                    <div
                                        class="trends_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }}" alt="">
                                        <div class="trends_category"><a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id.'/'.$blog->slug) }}">  {{date('d-m-Y', strtotime($blog->blog_date))}} <i
                                                    class="fas fa-calendar-alt ml-1"></i> </a></div>
                                    </div>
                                    <div class="trends_content">

                                        <div class="trends_info clearfix">
                                            <div class="trends_name text-dir ">
                                                <a style="color: #389A1B !important;"  href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id.'/'.$blog->slug) }}">  @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {{ strip_tags( $blog->title_en ?? '') }}
                                                @else
                                                {{ strip_tags( $blog->title_ar ?? '') }}
                                                @endif

                                            </a>
                                                <p class="text-dir" >
                                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {{ strip_tags(str_limit($blog->text_en ?? '', $limit = 200, $end = '...')) }}

                                                @else
                                                {{ strip_tags(str_limit($blog->text_ar ?? '', $limit = 200, $end = '...')) }}

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

    <section class="sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head_title">شركاء النجاح</div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                        الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        @foreach ($partners as $partner)
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 bg-1 partner-p">
                                    <div class="clients_title text-dir">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {!! $partner->name_en ?? '' !!}
                                    @else
                                        {!! $partner->name_ar ?? '' !!}
                                    @endif</div>
                                    <div class="clients_text text-dir">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {!! $partner->description_en ?? '' !!}
                                    @else
                                        {!! $partner->description_ar ?? '' !!}
                                    @endif</div>
                                    <div class="clients_btn"><a href="{{ LaravelLocalization::localizeUrl('/partners') }}" class="btn hero-btn"
                                            tabindex="0">{{ __('links.show_more') }}</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="clients_img">
                                        <img src="{{ asset('uploads/partners') }}/{{ $partner->logo ?? '' }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>
                </div>
            </div>

        </div>
        <div class="bottom-leaf-sec">
            <img src="images/Handdrawn Tropical Leaf2.svg" alt="">
        </div>
    </section>

    <div class="dont-delete">
        <span class="custom_dropdown_placeholder clc"></span>
        <ul class="custom_list clc"></ul>
    </div>
</main>
@endsection
