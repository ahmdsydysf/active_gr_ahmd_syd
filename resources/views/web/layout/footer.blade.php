<footer>
    <!--? Footer Start-->
    <div class="footer-area bg-1 py-5">
        <span class="top-bg">
            <img src="{{ asset('webassests/images/shape.png') }}" alt="" srcset="">
        </span>
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between dir text-dir" >
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <h3> {{ __('links.active_group') }}</h3>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">

                                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {!! str_limit( $company->overview_en ?? '', $limit = 216, $end = '..') !!}
                                    @else
                                        {!! str_limit($company->overview_ar ?? '', $limit = 216, $end = '..') !!}
                                    @endif
                                    </p>
                                </div>
                            </div>
                            <div class="footer-social f-right mb-3">
                                <a href="{{ $companyContact->facebook }}" class="hvr-icon-spin"><i
                                        class="fab fa-facebook-f hvr-icon"></i></a>
                                <a href="{{ $companyContact->twitter }}" class="hvr-icon-spin"><i
                                        class="fab fa-twitter hvr-icon"></i></a>
                                <a href="{{ $companyContact->instagram }}" class="hvr-icon-spin"><i
                                        class="fab fa-instagram hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h3>{{ __('links.useful_links') }} </h3>
                                <ul>
                                    <li><a
                                            href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a>
                                    </li>
                                    <li><a href="{{ LaravelLocalization::localizeUrl('/about') }}">
                                            {{ __('links.about_us') }}</a></li>
                                    <li><a
                                            href="{{ LaravelLocalization::localizeUrl('/service') }}">{{ __('links.services') }}</a>
                                    </li>
                                    {{-- <li><a href="{{ LaravelLocalization::localizeUrl('/vertProduct') }}"> منتجاتنا فى
                                            الاسمدة</a>
                                    <li><a href="{{ LaravelLocalization::localizeUrl('/pesticideProduct') }}">
                                            منتجاتنا فى المبيدات</a>

                                    </li> --}}

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h3> {{ __('links.useful_links') }}</h3>
                                <ul>
                                    <li><a
                                            href="{{ LaravelLocalization::localizeUrl('/partners') }}">{{ __('links.partenters') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ LaravelLocalization::localizeUrl('/blog') }}">{{ __('links.blogs') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ LaravelLocalization::localizeUrl('/gallery') }}">{{ __('links.gallery') }}</a>
                                    </li>
                                    <li><a href="{{ LaravelLocalization::localizeUrl('/contact') }}">
                                            {{ __('links.contact_us') }}</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h3> {{ __('links.contact_us') }}</h3>
                                <ul>
                                    <li class="link"><a href="#" style="font-size: 14px"><i class="fas fa-phone"></i>
                                            {{ $companyContact->phones }} </a></li>
                                    <li class="link"><a href="#"><i class="fas fa-envelope"></i>
                                            {{ $companyContact->email }}
                                        </a></li>
                                    <li class="link"><a href="#"><i class="fas fa-map-marker-alt"></i>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {{ $companyContact->address_en }}
                                            @else
                                                {{ $companyContact->address_ar }}
                                            @endif
                                        </a></li>
                                </ul>
                                <!-- Form -->
                                {{-- <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="  {{ __('links.email') }}"
                                        aria-label="  {{ __('links.email') }}" aria-describedby="basic-addon1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fab fa-telegram-plane"></i></span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right bg-1">
        <div class="container">
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> <a href="#"><b>Senior
                                        Consulting</b></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
