@extends('layouts.main.main_layout')


@section('page_title' , 'Products')

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2 welcome-image-shape hero-overly2">
        <div class="slider-height2  d-flex align-items-center" background>

            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>منتجاتنا</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="#">الرئيسية</a> <i
                                        class="fa fa-chevron-left"></i> <a href="#">منتجاتنا</a> </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- Hero End -->
    <!-- Gallary -->

    <section class="contact-section main-pro">
        <div class="container main-vid-sec my-5 " dir="rtl">
            <div class="row">


                <div class="col-12 col-lg-4">
                    <a class="play-btn video-view" href="https://www.youtube.com/watch?v=JCfkJNtgQ1U"></a>

                    <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                            src="{{asset('images/06.png')}}" alt=""></div>
                </div>
                <div class="pro_title text-right col-12 col-lg-8">
                    <h3 class="mb-2">
                        اكبر الشركات العاملة في المجال الزراعي في العالم
                    </h3>
                    <p>
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
                        إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر
                        من عام في القدم. قام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة
                        اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن قام البروفيسور ريتشارد ماك لينتوك وهو
                        بروفيسور اللغة
                        اللاتينية في جامعة هامبدن-سقام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة
                        اللاتينية في جامعة هامبدن-س أصول كلمة لاتينية</p>


                </div>



            </div>
        </div>

        <div class="container second-pro-sec">
            <div class="row mb-5">
                <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                    <h3 class="text-center p-3">منتجاتنا</h3>
                    <p class="title-p text-center">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً،
                        بل إن له
                        جذور
                        في
                        45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد،م.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <section>
                <h3 class="filter-links mb-5">
                    <ul class="row" dir="rtl">

                        <!-- <li class="list col active" data-filter="all">الكل</li> -->
                        <li class="list col" data-filter="sec1">عناصر كبري</li>
                        <li class="list col" data-filter="sec2">عناصر صغري</li>
                        <li class="list col" data-filter="sec3">اسمدة</li>

                    </ul>
                </h3>

                <div class="row filter-3">
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec2">
                        <div>
                            <img src="{{asset('images/02.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات فطرية</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec3">
                        <div>
                            <img src="{{asset('images/03.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات حشرية</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec1">
                        <div>
                            <img src="{{asset('images/01.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات نيناتوديه</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec2">
                        <div>
                            <img src="{{asset('images/05.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات حشريه</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec3">
                        <div>
                            <img src="{{asset('images/06.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات نيناتوديه</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec1">
                        <div>
                            <img src="{{asset('images/01.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات فطرية</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec2">
                        <div>
                            <img src="{{asset('images/05.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات فطرية</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec3">
                        <div>
                            <img src="{{asset('images/06.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات حشريه</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec1">
                        <div>
                            <img src="{{asset('images/04.png')}}" width="100%" height="100%">
                            <a download href="{{asset('images/01.png')}}" class="dwn-file" target="_blank">
                                <i class="far fa-file-pdf dwn-icon"></i>
                            </a>
                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12">مبيدات نيناتوديه</h3>
                                <p class="col-6 lo-left">الوكيل<span class="mr-1"> الوكيل الاول</span></p>
                                <p class="col-6 lo-right">المصنع<span class="mr-1"> الشرقية للدخان</span></p>
                                <p class="col-12 text-right">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                    عشوائياً، بل إن له
                                    جذور في
                                    45 قبل الميلاد، مما يجعله أكثر من 2000 ع 45 قبل الميلاد، مما يجعله أكثر من 2000
                                    ع
                                    الأدب
                                    اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                </p>
                            </div>
                        </div>
                    </div>


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
