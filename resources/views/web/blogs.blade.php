@extends('web.layout.web')
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row dir">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>{{ __('links.blogs') }}</h2>
                                <ul>
                                    <li class="breadcrumb-item"> <a
                                            href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a>
                                        <i class="fa fa-chevron-left"></i> <a href="#">{{ __('links.blogs') }}</a> </li>
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
                <div class="row dir" >
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div id="table_data">

                            @include('web.blogList')



                        </div>







                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title text-dir"><span> {{ __('links.latest_News') }}</span></h3>
                            @foreach ($latestPlogs as $latest)
                            <div class="media post_item">
                                <img src="{{ asset('uploads/blogs') }}/{{ $latest->image ?? '' }}" alt="post">
                                <div class="media-body text-dir px-2">
                                    <a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$latest->id.'/'.$latest->slug) }}">
                                        <h3>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {!! $latest->title_en ?? '' !!}
                                        @else
                                            {!! $latest->title_ar ?? '' !!}
                                        @endif</h3>
                                    </a>
                                    <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {!! str_limit($latest->text_en ?? '', $limit = 50, $end = '...') !!}
                                    @else
                                        {!! str_limit($latest->text_ar ?? '', $limit = 50, $end = '...') !!}
                                    @endif</p>
                                </div>
                            </div>
                            @endforeach

                        </aside>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];

                fetch_data(page);
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/blog/fetch_data?page=" + page,
                    success: function(data) {
                        $('#table_data').html(data);
                    }
                });
            }

        });
    </script>
@endsection
