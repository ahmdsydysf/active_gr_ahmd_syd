<div class="blog_left_sidebar">

<div class="row">
    @foreach ($blogs as $blog)
    <div class="col-lg-6 col-md-12 artical-block">

        <div class="trends_image">
            <img src="{{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }}" alt="">
            <div class="trends_category">
                <a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id.'/'.$blog->slug) }}"><i class="fas fa-calendar-alt ml-1"></i>{{date('d-m-Y', strtotime($blog->blog_date))}}</a>
            </div>
        </div>
        <div class="trends_content">

            <div class="trends_info clearfix">
                <div class="trends_name">
                    <a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id.'/'.$blog->slug) }}" >
                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! $blog->title_en ?? '' !!}
                    @else
                        {!! $blog->title_ar ?? '' !!}
                    @endif</a>
                    <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! str_limit($blog->text_en ?? '', $limit = 100, $end = '...') !!}
                    @else
                        {!! str_limit($blog->text_ar ?? '', $limit = 100, $end = '...') !!}
                    @endif</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

<nav class="blog-pagination d-flex justify-content-center align-items-center w-100">
    <ul class="pagination">
        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
            <!-- a Tag for another page -->
            <li class="page-item p-no  {{ $blogs->currentPage() == $i ? ' active' : '' }}"> <a
                    href="{{ $blogs->url($i) }}" class="page-link">{{ $i }}</a></li>
        @endfor

    </ul>
</nav>
</div>
