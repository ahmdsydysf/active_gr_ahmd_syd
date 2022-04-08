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
                            <h2>{{ __('links.contact_us') }}</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a> <i
                                    class="fa fa-chevron-left"></i> <a href="#">{{ __('links.contact_us') }}</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
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
                            <h3>{{ __('links.phone') }}</h3>
                            <p>{{ $companyContact->phones }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-envelope"></i></span>
                        <div class="media-body">
                            <h3>{{ __('links.email') }}</h3>
                            <p>{{ $companyContact->email }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-map-marker-alt"></i></span>
                        <div class="media-body">
                            <h3>{{ __('links.address') }}</h3>
                            <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $companyContact->address_en }}
                            @else
                                {{ $companyContact->address_ar }}
                            @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="form-contact contact_form" action="{{ LaravelLocalization::localizeUrl('/contact-message') }}"
                    method="post" >
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
            </div>
            <div>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="500" id="gmap_canvas"
                            src="{{$companyContact->google_map }}"
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
</main>

@endsection
