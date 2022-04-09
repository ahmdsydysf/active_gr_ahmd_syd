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
                                <h2>{{ __('links.partenters') }}</h2>
                                <ul>
                                    <li class="breadcrumb-item"> <a
                                            href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a>
                                        <i class="fa fa-chevron-left"></i> <a href="#">{{ __('links.partenters') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <!-- Hero End -->


        <section class="contact-section exp-contact">
            <div class="container">
                <div class="sec-gap testimonial-area">
                    <div class="container teste-sec1">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 pb-30">
                                <div class="head_title">{{ __('links.customer_feedback') }} </div>
                                <div class="head_text">
                                    خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="h1-testimonial-active  quotes">
                                    @foreach ($feedBacks as $feedback)
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial text-center">
                                            <!-- Testimonial Content -->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="testimonial-caption ">
                                                        <div
                                                            class="testimonial-founder d-flex align-items-center justify-content-center">
                                                            <div class="founder-img">
                                                                <img src="{{ asset('uploads/feedback') }}/{{ $feedback->image ?? '' }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="founder-text">
                                                            <span>
                                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                                    {{ $feedback->name_en }}
                                                                @else
                                                                    {{ $feedback->name_ar }}
                                                                @endif
                                                            </span>
                                                            <p>
                                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                                    {{ $feedback->position_en }}
                                                                @else
                                                                    {{ $feedback->position_ar }}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8  col-md-12 rev-text">
                                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                        {{ $feedback->feedback_en }}
                                                    @else
                                                        {{ $feedback->feedback_ar }}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="container  teste-sec2">
                        <img src="images/Handdrawn Tropical Leaf2.svg" alt="" srcset="" class="leaf-bg">
                        <div class="row mb-5">
                            <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                                <h3 class="text-center p-3">{{ __('links.partenters') }}</h3>
                                <p class="title-p text-center">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً،
                                    بل إن له
                                    جذور
                                    في 45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد،م.
                                    45 قبل م.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="all-part ">
                    <div class="scene row justify-content-center">
                        @foreach ($parnters as $parnter)
                        <div class="sngl-part  col-xl-3 col-lg-4 col-md-6 col-12 p-4">
                            <div class="cardpart">
                                <img src="{{ asset('uploads/partners') }}/{{$parnter->logo ?? '' }}" alt="" srcset="">
                                <div class="overlay-partner">

                                    <section class="ss-icon row justify-content-center">
                                        <a href="{{ $parnter->facebook}}" class="col-3"><img src="images/icons8-facebook-100.png"
                                                width="20px" height="20px" alt="" srcset=""></a>
                                        <a href="{{ $parnter->twitter}}" class="col-3"><img
                                                src="images/icons8-twitter-squared-100.png" width="20px" height="20px"
                                                alt="" srcset=""></a>
                                        <a href="{{ $parnter->instagram}}" class="col-3"><img src="images/icons8-instagram-100.png"
                                                width="20px" height="20px" alt="" srcset=""></a>
                                    </section>

                                </div>
                            </div>

                        </div>
                       @endforeach
                    </div>
                </div>


            </div>
        </section>



    </main>
@endsection
