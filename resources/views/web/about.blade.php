@extends('web.layout.web')
@section('content')
<main>
    <!-- slider Area Start-->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row dir">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>{{ __('links.about_us') }} </h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a> <i
                                        class="fa fa-chevron-left"></i> <a href="#">{{ __('links.about_us') }}</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    @if(Session::has('flash_success'))
    <div class="col-lg-12">
        <div class="alert alert-success alert-block {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
        <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
        <strong ><i class="fa fa-check-circle"></i> {{session('flash_success') }}</strong>
        </div>
    </div>
@endif
@if(Session::has('flash_danger'))
    <div class="col-lg-12">
        <div class="alert alert-danger alert-block {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
        <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
        <strong ><i class="fa fa-info-circle"></i> {{session('flash_danger')}}</strong>
        </div>
    </div>
@endif
    <section class="sec-gap">
        <div class="container">
            <div class="row dir" >
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="images/1.png" alt="">
                        <div class="exp">{{ __('links.ten_years') }} </div>
                    </div>
                </div>
                <div class="col-lg-6 text-dir">
                    <div>
                        <div class="sec-about">
                            <h3 class="about-head"> {{ __('links.about_us') }}</h3>
                            <div class="about_title2">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                {!! $company->slog_en ?? '' !!}
                            @else
                                {!! $company->slog_ar ?? '' !!}
                            @endif
                        </div>
                            <div class="about_text2"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                <p class="text-justify">
                                    {!! $company->overview_en !!}
                                </p>
                            @else
                                <p>
                                    {!! $company->overview_ar !!}
                                </p>
                            @endif </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="sec-gap about2">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 offset-lg-3">
                    <div class="head_title">{{ __('links.why_us') }}</div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                        الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام
                    </div>
                </div>
            </div>
            <div class="row dir">
                <!-- Reviews Slider Item -->


                @foreach ($whyRows as $whyRow)
                <div class="col-lg-4 col-md-6">
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
                        <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $whyRow->text_en !!}
                        @else
                            {!! $whyRow->text_ar !!}
                        @endif</p>
                    </div>
                </div>
                @endforeach

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
                    <div id="owl-demo" class="owl-carousel owl-theme text-dir">
                        @foreach ($partners as $partner)
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 bg-1 partner-p">
                                    <div class="clients_title">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {!! $partner->name_en ?? '' !!}
                                    @else
                                        {!! $partner->name_ar ?? '' !!}
                                    @endif</div>
                                    <div class="clients_text">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {!! $partner->description_en ?? '' !!}
                                    @else
                                        {!! $partner->description_ar ?? '' !!}
                                    @endif</div>
                                    <div class="clients_btn"><a href="" class="btn hero-btn"
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

    <div class="sec-gap testimonial-area testimonial-padding">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 pb-30">
                    <div class="head_title">{{ __('links.customer_feedback') }}</div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً بل إن له جذور في الأدب اللاتيني
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center text-dir">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
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
                                <div class="col-lg-8  col-md-12 rev-text">@if( LaravelLocalization::getCurrentLocale() === "en")
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

    <div class="banner_2 bg-2">
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 pb-30">
                        <div class="head_title">{{ __('links.certificate') }}</div>
                        <div class="head_text">
                            خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً بل إن له جذور
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme banner_2_slider">
@foreach ($contracts as $contract)
     <!-- Banner 2 Slider Item -->
     <div class="owl-item text-dir">
        <div class="banner_2_item">
            <div class="container fill_height">
                <div class="row fill_height">
                    <div class="offset-lg-1 col-lg-5 col-md-12 fill_height pr-0 about-text-res">
                        <div class="banner_2_image_container">
                            <div class="banner_2_image"><img src="{{asset('uploads/contracts')}}/{{$contract->image ?? ''}}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 bg-1 pl-0">
                        <div class="contract-data">
                            <div class="clients_title"> @if( LaravelLocalization::getCurrentLocale() === "en")
                                {{$contract->title_en}}
                                @else
                                {{$contract->title_ar}}
                                @endif
                            </div>
                            <div class="clients_text"> @if( LaravelLocalization::getCurrentLocale() === "en")
                                {{$contract->desc_en}}
                                @else
                                {{$contract->desc_ar}}
                                @endif </div>
                        </div>
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

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 pb-30">
                    <div class="head_title">تواصل معنا</div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً بل إن له جذور
                    </div>
                </div>
            </div>
            <div class="row contact-data dir">
                <div class="col-lg-6 col-md-12">
                    <form class="form-contact contact_form"  action="{{ LaravelLocalization::localizeUrl('/contact-message') }}"
                     method="post"  >
                     @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control " name="name"  type="text"

                                        placeholder="{{ __('links.name') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control " name="email"  type="email"

                                        placeholder=" {{ __('links.email') }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" name="subject"  type="text"

                                        placeholder="{{ __('links.subject') }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" name="mobile" id="mobile" type="text"

                                        placeholder=" {{ __('links.phone') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message"  cols="30"
                                        rows="6"
                                        placeholder="{{ __('links.message') }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="btn-submit">
                                <input type="submit" value="{{ __('links.send_msg') }}" class="btn hero-btn">
                                {{-- <a href="" class="btn hero-btn" tabindex="0">إرسال</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 contact-data1">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="340" id="gmap_canvas"
                                src="{{$companyContact->google_map }}"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://123movies-to.org">123movies</a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 340px;
                                    width: 100%;
                                }
                            </style><a href="https://www.embedgooglemap.net">google maps iframe code</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 340px;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 pb-30">
                    <div class="head_title">فريقنا</div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً بل إن له جذور
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" id="staff">

                        @foreach ($teams as $team)
                        <div class="item">
                            <div class="box-b staff">
                                <div class="box-img">
                                    <div class="wrapper">
                                        <div class="img-team">
                                            <ul class="social-icons">
                                                <li><a href="{{$team->facebook}}" target="_blank" class="hvr-icon-spin"><i class="fab fa-facebook-f hvr-icon"></i></a></li>
                                                <li><a href="{{$team->twitter}}" target="_blank" class="hvr-icon-spin"><i class="fab fa-twitter hvr-icon"></i></a></li>
                                                <li><a href="{{$team->instagram}}" target="_blank" class="hvr-icon-spin"><i class="fab fa-instagram hvr-icon"></i></a></li>
                                            </ul><img src="{{asset('uploads/teams')}}/{{$team->image ?? ''}}" />
                                        </div>
                                    </div>
                                </div>
                                <h3> @if( LaravelLocalization::getCurrentLocale() === "en")
                                    {{$team->name_en}}
                                    @else
                                    {{$team->name_ar}}
                                    @endif</h3>
                                <p>@if( LaravelLocalization::getCurrentLocale() === "en")
                                    {{$team->position_en}}
                                    @else
                                    {{$team->position_ar}}
                                    @endif </p>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        section.sec {
            padding: 50px 0px;
            position: relative;
        }

        .title,
        .title h3 {
            font-size: 22px;
            color: #2b4d7a;
            font-weight: 700;
            line-height: 1.2em;
        }

        .sm-title h3 {
            margin-bottom: 20px;
        }

        .title,
        .title h3 {
            font-size: 22px;
            color: #2b4d7a;
            font-weight: 700;
            line-height: 1.2em;
        }

        .owl-nav .owl-prev,
        .owl-nav .owl-next {
            top: 40%;
            position: absolute;
            border-radius: 40px !important;
            color: #ffffff;
            width: 40px;
            height: 40px;
            text-align: center;
        }

        .owl-nav .owl-prev {
            left: -5%;
        }

        .owl-nav .owl-next {
            right: -5%;
        }

        #staff .owl-nav .owl-prev i,
        .owl-nav .owl-next i {
            color: #fff;
            font-size: 20px;
            position: relative;
            left: 0px;
        }

        .box-b {
            margin: 0 10px;
            background-color: #F1F7F7;
            padding-bottom: 15px;
            transition: .2s all ease-in-out;
            border-radius: 4px;
            cursor: pointer;
            height: auto;
            position: relative;
        }

        .box-b .box-img {
            margin-bottom: 15px;
        }

        .staff .box-img img {
            height: 250px;
            width: 100%;
            margin: auto;
            border-radius: .3rem;
        }

        .box-b h3 {
            text-align: center;
            margin-bottom: 5px;
            font-size: 22px;
            color: #389A1B;
        }

        .box-b p {
            line-height: 1.4;
            font-size: 18px;
            color: rgba(0, 0, 0, 0.6);
            text-align: center;
            margin-bottom: 0px;
        }
    </style>

    <div class="dont-delete">
        <span class="custom_dropdown_placeholder clc"></span>
        <ul class="custom_list clc"></ul>
    </div>
</main>


@endsection
@section('scripts')
<script>
    var owl1 = $('#staff');
    owl1.owlCarousel({
        margin: 20,
        loop: true,
        dots: true,
        nav: true,
        navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            },
            1200: {
                items: 4
            }
        }
    });
</script>
@endsection
