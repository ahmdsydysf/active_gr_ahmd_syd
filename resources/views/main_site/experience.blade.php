@extends('layouts.main.main_layout')


@section('page_title' , 'Experience')

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2 welcome-image-shape hero-overly2">
        <div class="slider-height2  d-flex align-items-center" background>

            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>خبرات وارشادات</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="#">الرئيسية</a> <i
                                        class="fa fa-chevron-left"></i> <a href="#">خبرات وارشادات</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="pt-0 pt-sm-2 col-lg-3 col-12 hero-cap hero-cap2 text-center align-self-center sub-title">
                        <h3>تواصل معنا</h3>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Hero End -->
    <!-- استشر متخصص -->
    <section class="contact-section exp-contact">
        <div class="container">
            <div class="row contact-data" dir="rtl">
                <div class="col-12">
                    <div class="row">
                        <h2 class="contact-title col-12 col-md-4">استشر متخصص</h2>
                        <p class="title-p col-12 col-md-8">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً،
                            بل إن له
                            جذور
                            في
                            الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم.
                        </p>
                    </div>

                </div>

                <div class="col-12">
                    <form class="form-contact contact_form " action="contact_process.php" method="post"
                        id="contactForm " novalidate="novalidate">
                        <div class="row">
                            <div class="row col-lg">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'الاسم'"
                                            placeholder="الاسم">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'البريد الإلكتروني'"
                                            placeholder="البريد الإلكتروني">
                                    </div>
                                </div>
                                <div class="col-6 selectOption">
                                    <div class="form-group ">
                                        <select name="" id="producer" name="producer"
                                            class="form-select nice-select">
                                            <option value="" class="selected">نوع الخدمة</option>
                                            <option value="" class="option">2</option>
                                            <option value="" class="option">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم الهاتف'"
                                            placeholder="رقم الهاتف">
                                    </div>
                                </div>

                            </div>
                            <div class="row col-lg-6">

                                <div class="form-group col-12">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30"
                                        rows="6" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'رسالتك هنا ...'"
                                        placeholder="رسالتك هنا ..."></textarea>
                                </div>

                            </div>
                            <div class="row col-12 m-lg-0 p-lg-0 " dir="ltr">
                                <div class="form-group mt-3 col col-md-3 ">
                                    <div class="btn-submit"><a href="" class="btn hero-btn" tabindex="0">إرسال</a>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- استشر متخصص -->
    <!-- نصائح عامة -->

    <div class=" reviews bg-1 advice-sec py-5">
        <span class="top-bg">
            <img src="{{asset('images/shape.png')}}" alt="" srcset="">
        </span>
        <span class="bottom-bg">
            <img src="{{asset('images/shape.png')}}" alt="" srcset="">
        </span>
        <div class="container">
            <div class="row contact-data" dir="rtl">
                <div class="col-12 ">
                    <div class="row mb-5">
                        <h3 class="contact-title col-12 col-md-4">نصائح عامة</h3>
                        <p class="title-p col-12 col-md-8">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً،
                            بل إن له
                            جذور
                            في
                            45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000 ع الأدب
                            اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم.
                        </p>
                    </div>

                </div>


            </div>
        </div>

        <div class="container">
            <div class="row" dir="rtl">
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3">
                    <a class="play-btn video-view " href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>



                    <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                            src="{{asset('images/03.png')}}" alt="">
                    </div>
                    <div class="pro_title text-center">
                        <a href="#">
                            مبيدات فطرية
                        </a>
                    </div>


                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3">
                    <a class="play-btn video-view " href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>

                    <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                            src="{{asset('images/06.png')}}" alt=""></div>
                    <div class="pro_title text-center">
                        <a href="#">
                            مبيدات حشرية
                        </a>
                    </div>


                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3">
                    <a class="play-btn video-view " href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>

                    <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                            src="{{asset('images/01.png')}}" alt=""></div>
                    <div class="pro_title text-center">
                        <a href="#">
                            مبيدات نيناتودية
                        </a>
                    </div>


                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3">
                    <a class="play-btn video-view " href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>

                    <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                            src="{{asset('images/05.png')}}" alt=""></div>
                    <div class="pro_title text-center">
                        <a href="#">
                            مبيدات نيناتودية
                        </a>
                    </div>


                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3">
                    <a class="play-btn video-view " href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>

                    <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                            src="{{asset('images/08.png')}}" alt=""></div>
                    <div class="pro_title text-center">
                        <a href="#">
                            مبيدات نيناتودية
                        </a>
                    </div>


                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3">
                    <a class="play-btn video-view " href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>

                    <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                            src="{{asset('images/07.png')}}" alt=""></div>
                    <div class="pro_title text-center">
                        <a href="#">
                            مبيدات نيناتودية
                        </a>
                    </div>


                </div>
            </div>
            <div class="mt-3 row justify-content-center">
                <div class="btn-submit"><a href="" class="btn hero-btn" tabindex="0">المـزيد</a>
                </div>
            </div>
        </div>
    </div>
    <!-- نصائح عامة -->
    <!-- نصائح زراعية -->

    <div class="reviews advice-zra py-5">

        <div class="container">
            <div class="row contact-data" dir="rtl">
                <div class="col-12 ">
                    <div class="row mb-5">
                        <h3 class="contact-title col-12 col-md-4">نصائح زراعية</h3>
                        <p class="title-p col-12 col-md-8">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً،
                            بل إن له
                            جذور
                            في
                            45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000 ع الأدب
                            اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم.
                        </p>
                    </div>

                </div>
                <div class="col-12">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">

                            <div class="row py-5 mb-3 all-advice-posts">
                                <div class="media post_item px-0 col-12 flex-wrap mb-5">
                                    <img src="{{asset('images/06.png')}}" alt="post"
                                        class="col-12 col-md-6 col-lg-3 pr-0 pl-lg-5 pl-0">
                                    <div
                                        class="media-body col-12 col-md-6 col-lg-9  align-self-start mt-3 mt-lg-0 p-0 p-lg-3">
                                        <div class="col-12">
                                            <h3><a href="#">أكبر الشركات العاملة في المجال الزراعي</a></h3>

                                        </div>
                                        <div class="col-12">
                                            <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له
                                                جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدب
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="media post_item px-0 col-12 flex-wrap mb-5">
                                    <img src="{{asset('images/05.png')}}" alt="post"
                                        class="col-12 col-md-6 col-lg-3 pr-0 pl-lg-5 pl-0">
                                    <div
                                        class="media-body col-12 col-md-6 col-lg-9  align-self-start mt-3 mt-lg-0 p-0 p-lg-3">
                                        <div class="col-12">
                                            <h3><a href="#">أكبر الشركات العاملة في المجال الزراعي</a></h3>

                                        </div>
                                        <div class="col-12">
                                            <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له
                                                جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدب
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="media post_item px-0 col-12 flex-wrap mb-5">
                                    <img src="{{asset('images/04.png')}}" alt="post"
                                        class="col-12 col-md-6 col-lg-3 pr-0 pl-lg-5 pl-0">
                                    <div
                                        class="media-body col-12 col-md-6 col-lg-9  align-self-start mt-3 mt-lg-0 p-0 p-lg-3">
                                        <div class="col-12">
                                            <h3><a href="#">أكبر الشركات العاملة في المجال الزراعي</a></h3>

                                        </div>
                                        <div class="col-12">
                                            <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له
                                                جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدب
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="media post_item px-0 col-12 flex-wrap mb-5">
                                    <img src="{{asset('images/03.png')}}" alt="post"
                                        class="col-12 col-md-6 col-lg-3 pr-0 pl-lg-5 pl-0">
                                    <div
                                        class="media-body col-12 col-md-6 col-lg-9  align-self-start mt-3 mt-lg-0 p-0 p-lg-3">
                                        <div class="col-12">
                                            <h3><a href="#">أكبر الشركات العاملة في المجال الزراعي</a></h3>

                                        </div>
                                        <div class="col-12">
                                            <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له
                                                جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدب
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="media post_item px-0 col-12 flex-wrap mb-5">
                                    <img src="{{asset('images/01.png')}}" alt="post"
                                        class="col-12 col-md-6 col-lg-3 pr-0 pl-lg-5 pl-0">
                                    <div
                                        class="media-body col-12 col-md-6 col-lg-9  align-self-start mt-3 mt-lg-0 p-0 p-lg-3">
                                        <div class="col-12">
                                            <h3><a href="#">أكبر الشركات العاملة في المجال الزراعي</a></h3>

                                        </div>
                                        <div class="col-12">
                                            <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له
                                                جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                الأدبخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                                                إن له جذور
                                                في
                                                الأدب
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="mt-3 row justify-content-center">
                                <div class="btn-submit"><a href="" class="btn hero-btn" tabindex="0">المـزيد</a>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- نصائح زراعية -->

@endsection


@section('custom_script')
<script>
    // pop-Up-videos
    $('.video-view').magnificPopup({
        type: 'iframe'
        // other options
    });

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
