@extends('layouts.main.main_layout')


@section('page_title' , 'Blog Details')


@section('content')

    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>المقالات</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="#">الرئيسية</a> <i
                                        class="fa fa-chevron-left"></i> <a href="#">المقالات</a> </li>
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
                                            <img src="{{asset('images/08-1.png')}}" alt="">
                                            <div class="trends_category">
                                                <a href="#"><i class="fas fa-calendar-alt ml-1"></i> 2021 مايو </a>
                                            </div>
                                        </div>
                                        <div class="trends_content">

                                            <div class="trends_info clearfix">
                                                <div class="trends_name">
                                                    <a>
                                                        أكبر الشركات العاملة في المجال
                                                        الزراعي في العالم
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog_details text-right">
                                        <p>
                                            خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور
                                            في الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام
                                            في القدم. قام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة اللاتينية
                                            في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في
                                            نص لوريم إيبسوم وهي وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف
                                            المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي
                                        </p>
                                        <p>
                                            خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور
                                            في الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام
                                            في القدم. قام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة اللاتينية
                                            في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
                                        </p>
                                        <p>
                                            مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك لينتوك وهو
                                            بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن
                                            أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي وخلال تتبعه لهذه الكلمة
                                            في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص
                                            لوريم إيبسوم تأتي
                                        </p>
                                        <p>
                                            إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله
                                            أكثر من عام في القدم. قام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور
                                            اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة
                                            لاتينية غامضة
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title"><span>اخر المقالات</span></h3>
                            <div class="media post_item">
                                <img src="{{asset('images/04.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>أكبر الشركات العاملة في المجال الزراعي</h3>
                                    </a>
                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        الأدب</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('images/08-1.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>أكبر الشركات العاملة في المجال الزراعي</h3>
                                    </a>
                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        الأدب</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('images/05.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>أكبر الشركات العاملة في المجال الزراعي</h3>
                                    </a>
                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        الأدب</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('images/03.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>أكبر الشركات العاملة في المجال الزراعي</h3>
                                    </a>
                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        الأدب</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('images/08.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>أكبر الشركات العاملة في المجال الزراعي</h3>
                                    </a>
                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        الأدب</p>
                                </div>
                            </div>
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
                            <h2 class="trends_title">مقالات اخرى</h2>
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

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('images/09.png')}}" alt="">
                                            <div class="trends_category"><a href="#"> 2021 مايو <i
                                                        class="fas fa-calendar-alt ml-1"></i> </a></div>
                                        </div>
                                        <div class="trends_content">

                                            <div class="trends_info clearfix">
                                                <div class="trends_name">
                                                    <a>
                                                        أكبر الشركات العاملة في
                                                        <br />
                                                        المجال الزراعي في العالم
                                                    </a>
                                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                        إن له جذور في الأدب</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('images/08.png')}}" alt="">
                                            <div class="trends_category"><a href="#"> 2021 مايو <i
                                                        class="fas fa-calendar-alt ml-1"></i> </a></div>
                                        </div>
                                        <div class="trends_content">

                                            <div class="trends_info clearfix">
                                                <div class="trends_name">
                                                    <a>
                                                        أكبر الشركات العاملة في
                                                        <br />
                                                        المجال الزراعي في العالم
                                                    </a>
                                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                        إن له جذور في الأدب</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('images/05.png')}}" alt="">
                                            <div class="trends_category"><a href="#"> 2021 مايو <i
                                                        class="fas fa-calendar-alt ml-1"></i> </a></div>
                                        </div>
                                        <div class="trends_content">

                                            <div class="trends_info clearfix">
                                                <div class="trends_name">
                                                    <a>
                                                        أكبر الشركات العاملة في
                                                        <br />
                                                        المجال الزراعي في العالم
                                                    </a>
                                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                        إن له جذور في الأدب</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('images/03.png')}}" alt="">
                                            <div class="trends_category"><a href="#"> 2021 مايو <i
                                                        class="fas fa-calendar-alt ml-1"></i> </a></div>
                                        </div>
                                        <div class="trends_content">

                                            <div class="trends_info clearfix">
                                                <div class="trends_name">
                                                    <a>
                                                        أكبر الشركات العاملة في
                                                        <br />
                                                        المجال الزراعي في العالم
                                                    </a>
                                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                        إن له جذور في الأدب</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('images/04.png')}}" alt="">
                                            <div class="trends_category"><a href="#"> 2021 مايو <i
                                                        class="fas fa-calendar-alt ml-1"></i> </a></div>
                                        </div>
                                        <div class="trends_content">

                                            <div class="trends_info clearfix">
                                                <div class="trends_name">
                                                    <a>
                                                        أكبر الشركات العاملة في
                                                        <br />
                                                        المجال الزراعي في العالم
                                                    </a>
                                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                        إن له جذور في الأدب</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('images/06.png')}}" alt="">
                                            <div class="trends_category"><a href="#"> 2021 مايو <i
                                                        class="fas fa-calendar-alt ml-1"></i> </a></div>
                                        </div>
                                        <div class="trends_content">

                                            <div class="trends_info clearfix">
                                                <div class="trends_name">
                                                    <a>
                                                        أكبر الشركات العاملة في
                                                        <br />
                                                        المجال الزراعي في العالم
                                                    </a>
                                                    <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                        إن له جذور في الأدب</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
