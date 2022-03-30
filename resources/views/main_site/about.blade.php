@extends('layouts.main.main_layout')

@section('page_title' , "About Us")

@section('content')

    <!-- slider Area Start-->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>من نحن</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="#">الرئيسية</a> <i
                                        class="fa fa-chevron-left"></i> <a href="#">من نحن</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <section class="sec-gap">
        <div class="container">
            <div class="row" dir="rtl">
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="{{asset('images/1.png')}}" alt="">
                        <div class="exp">10 سنوات من الخبره </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="sec-about">
                            <h3 class="about-head">من نحن</h3>
                            <div class="about_title2">الموزع الاول لتجاره الاسمده والمبيدات</div>
                            <div class="about_text2">
                                خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                                اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام
                                البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في
                                فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي وخلال تتبعه لهذه
                                الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم
                                إيبسوم تأتي

                                اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة
                                في نص لوريم إيبسوم وهي وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير
                                قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي
                            </div>
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
                    <div class="head_title">لماذا نحن ؟</div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                        الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Reviews Slider Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="review d-flex flex-row align-items-start justify-content-start">
                        <div class="review_image">
                            <img src="{{asset('images/Cash.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="rev-content">
                        <h3>الدفع عند الاستلام</h3>
                        <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                            اللاتيني</p>
                    </div>
                </div>

                <!-- Reviews Slider Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="review d-flex flex-row align-items-start justify-content-start">
                        <div class="review_image">
                            <img src="{{asset('images/Delivery-Cart.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="rev-content">
                        <h3>توفير كميات</h3>
                        <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                            اللاتيني</p>
                    </div>
                </div>

                <!-- Reviews Slider Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="review d-flex flex-row align-items-start justify-content-start">
                        <div class="review_image">
                            <img src="{{asset('images/Delivery-Wait.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="rev-content">
                        <h3>خدمه الشحن</h3>
                        <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                            اللاتيني</p>
                    </div>
                </div>

                <!-- Reviews Slider Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="review d-flex flex-row align-items-start justify-content-start">
                        <div class="review_image">
                            <img src="{{asset('images/Cash.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="rev-content">
                        <h3>الدفع عند الاستلام</h3>
                        <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                            اللاتيني</p>
                    </div>
                </div>

                <!-- Reviews Slider Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="review d-flex flex-row align-items-start justify-content-start">
                        <div class="review_image">
                            <img src="{{asset('images/Delivery-Cart.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="rev-content">
                        <h3>توفير كميات</h3>
                        <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                            اللاتيني</p>
                    </div>
                </div>

                <!-- Reviews Slider Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="review d-flex flex-row align-items-start justify-content-start">
                        <div class="review_image">
                            <img src="{{asset('images/Delivery-Wait.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="rev-content">
                        <h3>خدمه الشحن</h3>
                        <p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                            اللاتيني</p>
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
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 bg-1 partner-p">
                                    <div class="clients_title">الشركه الافريقية للاسمده</div>
                                    <div class="clients_text">
                                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
                                        كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه
                                        الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص
                                        لوريم إيبسوم تأتيفي جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
                                        كلمة لاتينية غامضة في نص لوريم إيبسومفي جامعة هامبدن-سيدني في فيرجينيا
                                        بالبحث عن أصول
                                        كلمة لاتينية غامضة في نص لوريم إيبسوم
                                    </div>
                                    <div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="clients_img">
                                        <img src="{{asset('images/10.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 bg-1 partner-p">
                                    <div class="clients_title">الشركه الدوليه للاسمده الصناعيه والطبيعيه</div>
                                    <div class="clients_text">
                                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000
                                        عام في القدم. قام البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو
                                        بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
                                        كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه
                                        الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص
                                        لوريم إيبسوم تأتي
                                    </div>
                                    <div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="clients_img">
                                        <img src="{{asset('images/1.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 bg-1 partner-p">
                                    <div class="clients_title">الشركه الافريقية للاسمده</div>
                                    <div class="clients_text">
                                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
                                        كلمة لاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
                                        كلمة لاتينية غامضة في نص لوريم إيبسوم غامضة في نص لوريم إيبسوم وهي
                                        "consectetur"، وخلال تتبعه لهذه
                                        الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. في جامعة هامبدن-سيدني
                                        في فيرجينيا بالبحث عن أصول
                                        كلمة لاتينية غامضة في نص لوريم إيبسوم فلقد اتضح أن كلمات نص
                                        لوريم إيبسوم تأتي
                                    </div>
                                    <div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="clients_img">
                                        <img src="{{asset('images/Scroll Group 10@2x.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 bg-1 partner-p">
                                    <div class="clients_title">الشركه الدوليه للاسمده الصناعيه والطبيعيه</div>
                                    <div class="clients_text">
                                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                        الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000
                                        عام في القدم. قام البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو
                                        بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
                                        كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه
                                        الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص
                                        لوريم إيبسوم تأتي
                                    </div>
                                    <div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="clients_img">
                                        <img src="{{asset('images/Scroll Group 5@2x.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="bottom-leaf-sec">
            <img src="{{asset('images/Handdrawn Tropical Leaf2.svg')}}" alt="">
        </div>
    </section>

    <div class="sec-gap testimonial-area testimonial-padding">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 pb-30">
                    <div class="head_title">قصص النجاح</div>
                    <div class="head_text">
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً بل إن له جذور في الأدب اللاتيني
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="testimonial-caption ">
                                        <div
                                            class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src="{{asset('images/t4.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="founder-text">
                                            <span>م / ليلي هلال</span>
                                            <p>صاحب مؤسسه زراعيه</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-lg-1 col-lg-6 offset-lg-1 col-md-12 rev-text">
                                    خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                    الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم.
                                    قام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة اللاتينية في جامعة
                                    هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم
                                    وهي وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد
                                    اتضح أن كلمات نص لوريم إيبسوم تأتي
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="testimonial-caption ">
                                        <div
                                            class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src="{{asset('images/rev-2.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="founder-text">
                                            <span>م / محمد هلال</span>
                                            <p>صاحب مؤسسه زراعيه</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 rev-text">
                                    خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                                    الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم.
                                    قام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة اللاتينية في جامعة
                                    هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم
                                    وهي وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد
                                    اتضح أن كلمات نص لوريم إيبسوم تأتي
                                </div>
                            </div>
                        </div>
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
                        <div class="head_title">الشهادات والعقود</div>
                        <div class="head_text">
                            خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً بل إن له جذور
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme banner_2_slider">

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="offset-lg-1 col-lg-5 col-md-12 fill_height pr-0 about-text-res">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="{{asset('images/basf.jpg')}}" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 bg-1 pl-0">
                                        <div class="contract-data">
                                            <div class="clients_title">الشركه الدوليه للاسمده الصناعيه والطبيعيه
                                            </div>
                                            <div class="clients_text">
                                                خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له
                                                جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                                أكثر من" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة
                                                هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص
                                                لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه الكلمة في الأدب
                                                اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم
                                                إيبسوم تأتي
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="offset-lg-1 col-lg-5 col-md-12 fill_height pr-0 about-text-res">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="{{asset('images/basf2jpg.jpg')}}" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 bg-1 pl-0">
                                        <div class="contract-data">
                                            <div class="clients_title">الشركه الدوليه للاسمده الصناعيه والطبيعيه
                                            </div>
                                            <div class="clients_text">
                                                خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له
                                                جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                                أكثر من" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة
                                                هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص
                                                لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه الكلمة في الأدب
                                                اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم
                                                إيبسوم تأتي
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="offset-lg-1 col-lg-5 col-md-12 fill_height pr-0 about-text-res">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="{{asset('images/basf3.png')}}" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 bg-1 pl-0">
                                        <div class="contract-data">
                                            <div class="clients_title">الشركه الدوليه للاسمده الصناعيه والطبيعيه
                                            </div>
                                            <div class="clients_text">
                                                خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له
                                                جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله
                                                أكثر من" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة
                                                هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص
                                                لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه الكلمة في الأدب
                                                اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم
                                                إيبسوم تأتي
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
            <div class="row contact-data" dir="rtl">
                <div class="col-lg-6 col-md-12">
                    <form class="form-contact contact_form" action="contact_process.php" method="post"
                        id="contactForm" novalidate="novalidate">
                        <div class="row">
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
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'المنتج'"
                                        placeholder="المنتج">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم الهاتف'"
                                        placeholder="رقم الهاتف">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30"
                                        rows="6" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'رسالتك هنا ...'"
                                        placeholder="رسالتك هنا ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="btn-submit"><a href="" class="btn hero-btn" tabindex="0">إرسال</a></div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 contact-data1">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="340" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=senior%20steps%20cairo&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
                        <div class="item">
                            <div class="box-b staff">
                                <div class="box-img">
                                    <img src="{{asset('images/t1.png')}}">
                                </div>
                                <h3> محمد محمود </h3>
                                <p> مدير الشركة </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-b staff">
                                <div class="box-img">
                                    <img src="{{asset('images/t3.png')}}">
                                </div>
                                <h3> محمد محمود </h3>
                                <p> مدير الشركة </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-b staff">
                                <div class="box-img">
                                    <img src="{{asset('images/t1.png')}}">
                                </div>
                                <h3> محمد محمود </h3>
                                <p> مدير الشركة </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-b staff">
                                <div class="box-img">
                                    <img src="{{asset('images/t3.png')}}">
                                </div>
                                <h3> محمد محمود </h3>
                                <p> مدير الشركة </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-b staff">
                                <div class="box-img">
                                    <img src="{{asset('images/t1.png')}}">
                                </div>
                                <h3> محمد محمود </h3>
                                <p> مدير الشركة </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-b staff">
                                <div class="box-img">
                                    <img src="{{asset('images/t3.png')}}">
                                </div>
                                <h3> محمد محمود </h3>
                                <p> مدير الشركة </p>
                            </div>
                        </div>
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

@endsection



@section('custom_script')
<script>
    $(document).ready(function () {

        $("#owl-demo").owlCarousel({
            navigation: true,
            autoplay: true,
            items: 1,
            loop: true,
            nav: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
        });

    });
</script>

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
