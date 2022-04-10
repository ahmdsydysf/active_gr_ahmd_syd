@extends('layouts.dash.app')

@section('page_title' , "تعديل عن الشركة")

@section('content')



<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">تعديل عن الشركة</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('company.update' ,  $row->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="form-group">
            <label>لينك الفيديو</label>
            <textarea  name="company_video" class="form-control" rows="3" placeholder="النص">{{$row->company_video}}</textarea>
        </div>
        @error('company_video')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="form-group">
                <label>عن الشركة بالانجليزي</label>
                <textarea  name="overview_en" class="form-control" rows="3" placeholder="النص">{{$row->overview_en}}</textarea>
            </div>
            @error('overview_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label>عن الشركة بالعربي</label>
                <textarea  name="overview_ar" class="form-control" rows="3" placeholder="النص">{{$row->overview_ar}}</textarea>
            </div>
            @error('overview_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label>الهدف انجليزي</label>
                <textarea  name="mission_en" class="form-control" rows="3" placeholder="النص">{{$row->mission_en}}</textarea>
            </div>
            @error('mission_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label>الهدف عربي</label>
                <textarea  name="mission_ar" class="form-control" rows="3" placeholder="النص">{{$row->mission_ar}}</textarea>
            </div>
            @error('mission_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label>الرؤية انجليزي</label>
                <textarea  name="vision_en" class="form-control" rows="3" placeholder="النص">{{$row->vision_en}}</textarea>
            </div>
            @error('vision_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label>الرؤية عربي</label>
                <textarea  name="vision_ar" class="form-control" rows="3" placeholder="النص">{{$row->vision_ar}}</textarea>
            </div>
            @error('vision_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success">تعديل</button>
        <a href="{{ route('company.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>

@endsection

@section('script')
    <script>
        $(".video").change(function () {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.video-preview').attr('src', e.target.result);
                        $('.video-preview').play();

                    }

                    reader.readAsDataURL(this.files[0]);
                }

        });
    </script>
@endsection
