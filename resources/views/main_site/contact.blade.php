@extends('layouts.main.main_layout')


@section('page_title' , 'Contact Us')


@section('content')
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>اتصل بنا</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="#">الرئيسية</a> <i
                                        class="fa fa-chevron-left"></i> <a href="#">اتصل بنا</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row contact-data" dir="rtl">
                <div class="col-8">
                    <h2 class="contact-title">يسعدنا تواصلك معنا</h2>
                    <p class="title-p">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
                        الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام
                        البروفيسور ريتشارد ماك لينتوك وهو بروفيسور</p>
                </div>
                <div class="col-lg-6 contact-data1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-phone"></i></span>
                        <div class="media-body">
                            <h3>الهاتف</h3>
                            <p>011 275 214 122 - 010 93 174 220</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-envelope"></i></span>
                        <div class="media-body">
                            <h3>البريد الإلكتروني</h3>
                            <p>info@seniorsteps.com</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-map-marker-alt"></i></span>
                        <div class="media-body">
                            <h3>العنوان</h3>
                            <p>المنطقه الحره - مدينة نصر القاهره</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
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
            </div>
            <div>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=senior%20steps%20cairo&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://123movies-to.org">123movies</a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 100%;
                            }
                        </style><a href="https://www.embedgooglemap.net">google maps iframe code</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 100%;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
