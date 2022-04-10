@extends('layouts.dash.app')

@section('page_title' , "تعديل معرض الصور")

@section('content')


<div class="box-body">
<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">تعديل معرض الصور</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('slider_images.update' ,  $row->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="form-group">
            <img src="{{asset('uploads/slider_images/' . $row->image)}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
          <dp-fbi></dp-fbi>
        </div>
        <div class="form-group">
            <label for="exampleInputuser1">اختر صورة</label>
            <input type="file" name="image" class="form-control image" id="exampleInputuser1" >
          <dp-fbi></dp-fbi>
        </div>


            <div class="form-group">
                <label>العنوان عربي</label>
                <textarea  name="title_ar" class="form-control" rows="3" placeholder="النص">{{$row->title_ar}}</textarea>
            </div>
            @error('title_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


        <div class="form-group">
            <label>العنوان انجليزي</label>
            <textarea  name="title_en" class="form-control" rows="3" placeholder="النص">{{$row->title_en}}</textarea>
        </div>
        @error('title_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>النص عربي</label>
            <textarea  name="text_ar" class="form-control" rows="3" placeholder="النص">{{$row->text_ar}}</textarea>
        </div>
        @error('text_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>النص انجليزي</label>
            <textarea  name="text_en" class="form-control" rows="3" placeholder="النص">{{$row->text_en}}</textarea>
        </div>
        @error('text_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="form-group" style="width: 135px">
                <label for="">الترتيب</label>
                <input type="number"
                    value="{{$row->order}}"
                    name="order" class="form-control"
                    id="">
            </div>
            @error('order')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <div class="checkbox">
                  <label>
                    نشط
                    <input type="checkbox" {{$row->active == 1 ? 'checked' : '' }} id="newTitle" name="active"  value="1"/>

                  </label>
                </div>
            </div>

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success">تعديل</button>
        <a href="{{ route('slider_images.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>
  </div>

@endsection

@section('script')
    <script>
        $(".image").change(function () {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.image-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);
                }

        });
    </script>
@endsection
