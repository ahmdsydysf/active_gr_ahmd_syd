<header>

    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container ml-3">
                    <div class="col-xl-12">
                        <div
                            class="row d-flex justify-content-between align-items-center ml-xl-5 ml-lg-4 ml-md-3 ml-2">
                            <div class="header-info-left">
                                <ul>
                                    {{-- <li><a href="">English</a></li> --}}
                                    <li>
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                        @if (LaravelLocalization::getCurrentLocale() != 'ar' && $localeCode == 'ar')
                                        <a  rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                        <!--{{ $properties['native'] }}-->

                                        {{ __('links.ar') }}
                                    </a>

                                        @endif
                                        @if (LaravelLocalization::getCurrentLocale() != 'en' && $localeCode == 'en')
                                        <a  rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                        {{ __('links.en') }} </a>

                                        @endif
                                        <!--|-->

                                @endforeach
                            </li>
                                    <li><a href="">{{ __('links.rks') }}</a></li>
                                    <li><a href="">{{ __('links.experance') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class=" ml-0 mr-0">
                    <div class="row align-items-center" dir="rtl">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-4">
                            <div class="logo">
                                <a href="{{ LaravelLocalization::localizeUrl('/') }}">
                                    <img src="{{ asset('webassests/images/logo-1.png')}}" alt="logo" class="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 bg-gradient">
                            <div class="menu-wrapper col-md-12 d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu col-md-12 d-none d-lg-block">
                                    <nav class="">
                                        <ul id="navigation" class="d-flex justify-content-around">
                                            <li><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a></li>
                                            <li><a href="#">{{ __('links.about_us') }} </a></li>
                                            <li><a href="#">{{ __('links.services') }}</a></li>
                                            <li><a href="#"> {{ __('links.products') }}</a></li>
                                              <li><a href="#"> {{ __('links.partenters') }}</a></li>
                                            <li><a href="#">{{ __('links.blog') }}</a></li>
                                            <li><a href="#">{{ __('links.gallery') }}</a></li>
                                            <li><a href="#"> {{ __('links.contact_us') }}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
