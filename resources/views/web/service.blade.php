@extends('web.layout.web')
@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area2 welcome-image-shape hero-overly2">
        <div class="slider-height2  d-flex align-items-center">

            <div class="container">
                <div class="row dir">

                    <div class="col-12 col-lg-6 offset-0 offset-lg-3">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>{{ __('links.services') }}</h2>
                            <ul>
                                <li class="breadcrumb-item"> <a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a> <i
                                        class="fa fa-chevron-left"></i> <a href="#">{{ __('links.services') }}</a> </li>
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
        <section class="contact-section exp-contact">
            <div class="container">
                <div class="row contact-data" >
                    <div class="col-12">
                        <div class="row dir">
                            <h2 class="contact-title col-12 col-md-4">استشارات فنية</h2>
                            <p class="title-p col-12 col-md-8">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                عشوائياً،
                                بل إن له
                                جذور
                                خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                عشوائياً،
                                بل إن له
                                الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في
                                القدم.
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <div class="container">
            <section>
                <div class="row filter-3 top-sec">

                    <div id="loadData" class="row">
                    <?php
                    $last_id =0 ;
                   ?>

                    @foreach ($services as $row)
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " data-item="sec3">
                        <div>
                            <img src="{{asset('uploads/services')}}/{{$row->image}}" width="100%" height="100%">

                        </div>
                        <div class="bottom-lorem">
                            <div class="row">
                                <h3 class="col-12"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $row->title_en }}
                                @else
                                    {{ $row->title_ar }}
                                @endif<a @if (LaravelLocalization::getCurrentLocale() === 'en')
                                href=" {{ $row->pdf_en }}"
                            @else
                            href=" {{ $row->pdf_ar }}"
                            @endif
                                download="download"
                                        target="_blank"><i class="far fa-file-pdf dwn-icon"></i></a></h3>
                                <p class="col-12 text-dir"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $row->text_en }}
                                @else
                                    {{ $row->text_ar }}
                                @endif</p>
                            </div>
                        </div>
                    </div>
                    <?php $last_id = $row->id ;
                    ?>
                    @endforeach

      {{-- div id --}}
                    </div>
                    <input type="text" style="opacity: 0;" id="last" value="{{$last_id}}">
                    @if(count($services) >= 1 && count($allRows) > count($services))
                    <div class="btn-submit"><button id="loadBtn" onclick="loadMoreData(document.getElementById('last').value);" class="btn hero-btn">  المـزيد</button></div>
      @endif
                </div>
            </section>

        </div>
    </section>
    <div class="contact-section main-pro bottom-section bg-1">
        <span class="top-bg">
            <img src="images/shape.png" alt="" srcset="">
        </span>
        <span class="bottom-bg">
            <img src="images/shape.png" alt="" srcset="">
        </span>
        <section class="contact-section exp-contact">
            <div class="container">
                <div class="row contact-data" >
                    <div class="col-12">
                        <div class="row dir">
                            <h2 class="contact-title col-12 col-md-4">نصائح فنية</h2>
                            <p class="title-p col-12 col-md-8 text-dir">خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                عشوائياً،
                                بل إن له
                                جذور
                                خلافا للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ
                                عشوائياً،
                                بل إن له
                                الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في
                                القدم.
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <div class="container">
            <section>
                <div class="row filter-3 top-sec">
                    <div id="loadDataAdvices" class="row">
                        <?php
                        $lastdevice_id =0 ;
                       ?>

                        @foreach ($advices as $row)
                        <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " >
                            <div>
                                <img src="{{asset('uploads/services')}}/{{$row->image}}" width="100%" height="100%">

                            </div>
                            <div class="bottom-lorem">
                                <div class="row">
                                    <h3 class="col-12"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {{ $row->title_en }}
                                    @else
                                        {{ $row->title_ar }}
                                    @endif<a href="images/01.png" download="download"
                                            target="_blank"><i class="far fa-file-pdf dwn-icon"></i></a></h3>
                                    <p class="col-12 text-dir"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {!! $row->text_en !!}
                                    @else
                                        {!! $row->text_ar !!}
                                    @endif</p>
                                </div>
                            </div>
                        </div>
                        <?php $lastdevice_id = $row->id ;
                        ?>
                        @endforeach

          {{-- div id --}}
                        </div>

                    <input type="text" style="opacity: 0;" id="lastdevice" value="{{$lastdevice_id}}">
                    @if(count($advices) >= 1 && count($allAdvices) > count($advices))
                    <div class="btn-submit"><button id="loadBtnAdvice" onclick="loadMoreAdvices(document.getElementById('lastdevice').value);" class="btn hero-btn">  المـزيد</button></div>
      @endif
                </div>
            </section>

        </div>
    </div>




    {{-- <nav class="blog-pagination justify-content-center d-flex">
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
    </nav> --}}
    <!-- Gallary -->
    <script>

    </script>
</main>
@endsection
@section('scripts')
<script>
    function loadMoreAdvices(id){
        $.ajax({
    url: '{{url("load-advices")}}',
    data: {
        id:id,
    },

    type: "POST",
    headers: {
        'X-CSRF-Token': '{{ csrf_token() }}',
    },
    success: function(data){
      $('#loadDataAdvices').append(data.output);
        document.getElementById('lastdevice').value=data.lastdevice_id;
        if(data.lastdevice_id <= 1){

            document.getElementById('loadBtnAdvice').style.display='none';
        }else{

            document.getElementById('loadBtnAdvice').style.display='block';
        }

    },
    error: function(){
          document.getElementById('loadBtnAdvice').style.display='none';
     }

    });
    }
    function loadMoreData(id){
$.ajax({
    url: '{{url("load-data")}}',
    data: {
        id:id,
    },

    type: "POST",
    headers: {
        'X-CSRF-Token': '{{ csrf_token() }}',
    },
    success: function(data){
      $('#loadData').append(data.output);
        document.getElementById('last').value=data.last_id;
        if(data.last_id <= 1){

            document.getElementById('loadBtn').style.display='none';
        }else{

            document.getElementById('loadBtn').style.display='block';
        }

    },
    error: function(){
          document.getElementById('loadBtn').style.display='none';
     }

    });
}
</script>
@endsection
