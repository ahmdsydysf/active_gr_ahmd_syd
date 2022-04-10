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
                                <h2>منتجاتنا</h2>
                                <ul>
                                    <li class="breadcrumb-item"> <a href="#">الرئيسية</a> <i class="fa fa-chevron-left"></i>
                                        <a href="#">منتجاتنا</a> </li>
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
                                src="images/06.png" alt=""></div>
                    </div>
                    <div class="pro_title text-right col-12 col-lg-8">
                        <h3 class="mb-2">
                            اكبر الشركات العاملة في المجال الزراعي في العالم
                        </h3>
                        <p>
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $fertilizer->description_en }}
                            @else
                                {{ $fertilizer->description_ar }}
                            @endif
                        </p>


                    </div>



                </div>
            </div>

            <div class="container second-pro-sec">
                <div class="row mb-5">
                    <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                        <h3 class="text-center p-3">منتجاتنا</h3>
                        <p class="title-p text-center">
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $fertilizer->description_en }}
                            @else
                                {{ $fertilizer->description_ar }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <section>
                    <h3 class="filter-links mb-5">
                        <ul class="row" dir="rtl">

                            {{-- <!-- <li class="list col active" data-filter="all">الكل</li> -->
                            <li class="list col" data-filter="sec1">عناصر كبري</li>
                            <li class="list col" data-filter="sec2">عناصر صغري</li>
                            <li class="list col" data-filter="sec3">اسمدة</li> --}}
                            @foreach ($products_Fertilizers as $row)
                                <li class="list col" data-filter="sec.{{ $row->id }}">
                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {{ $row->type_en }}
                                    @else
                                        {{ $row->type_ar }}
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </h3>

                    <div class="row filter-3">
                        @foreach ($products_Fertilizers as $row)
                            @foreach ($row->products as $product)
                                <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec.{{ $row->id }}">
                                    <div>
                                        <img src="{{ asset('uploads/products') }}/{{ $product->image ?? '' }}"
                                            width="100%" height="100%">
                                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                                            <a download
                                                href="{{ asset('uploads/products') }}/{{ $product->pdf_en ?? '' }}"
                                                class="dwn-file" target="_blank">
                                                <i class="far fa-file-pdf dwn-icon"></i>
                                            </a>
                                        @else
                                            <a download
                                                href="{{ asset('uploads/products') }}/{{ $product->pdf_ar ?? '' }}"
                                                class="dwn-file" target="_blank">
                                                <i class="far fa-file-pdf dwn-icon"></i>
                                            </a>
                                        @endif

                                    </div>
                                    <div class="bottom-lorem">
                                        <div class="row">
                                            <h3 class="col-12"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {{ $product->name_en }}
                                            @else
                                                {{ $product->name_ar }}
                                            @endif</h3>
                                            <p class="col-6 lo-left">الوكيل<span class="mr-1"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {{ $product->partner->name_en ?? '' }}
                                            @else
                                                {{ $product->partner->name_ar ?? ''}}
                                            @endif
                                                    </span></p>
                                            <p class="col-6 lo-right">المصنع<span class="mr-1">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {{ $product->factory->name_en ?? '' }}
                                            @else
                                                {{ $product->factory->name_ar ?? ''}}
                                            @endif</span></p>
                                            <p class="col-12 text-right">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {{ $product->description_en ?? '' }}
                                            @else
                                                {{ $product->description_ar ?? ''}}
                                            @endif</p>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endforeach



                </section>

            </div>
        </section>

        <!-- Gallary -->
        <script>

        </script>
    </main>
@endsection
