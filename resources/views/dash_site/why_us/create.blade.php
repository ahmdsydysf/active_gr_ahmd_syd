
@extends('layouts.dash.app')

@section('page_title' , "اضافة لماذا نحن ")

@section('content')


<div class="box-body">


<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة لماذا نحن </h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('why_us.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">
            <div class="form-group">
                <img src="{{asset('uploads/why_us/default_logo.png')}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
            <dp-fbi></dp-fbi>
            </div>
            <div class="form-group">
                <label for="exampleInputuser1">اختر لوجو</label>
                <input type="file" name="logo" class="form-control image" id="exampleInputuser1" >
            <dp-fbi></dp-fbi>
            </div>
            @error('logo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label>الاسم انجليزي</label>
                    <input type="text"  name="name_en" value="{{old('name_en')}}" class="form-control"
                       placeholder=" الاسم انجليزي">
                </div>
            </div>
            @error('name_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label>الاسم عربي</label>
                    <input type="text"  name="name_ar" value="{{old('name_ar')}}" class="form-control"
                       placeholder=" الاسم عربي">
                </div>
            </div>
            @error('name_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="form-group" style="width: 135px">
                <label for="">الترتيب</label>
                <input type="number"
                    value="{{old('order')}}"
                    name="order" class="form-control"
                    id="">
            </div>
            @error('order')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>اضافة</button>
        <a href="{{ route('why_us.index') }}" class="btn btn-danger">رجوع</a>
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
