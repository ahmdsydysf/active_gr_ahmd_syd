@extends('layouts.dash.app')

@section('page_title' , "اضافة تقييم")

@section('content')

<div class="box-body">

<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة تقييم</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('feedback.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">
        <div class="input-group">
            <label for="">تاريخ المقال</label>
            <input type="date" value="{{ old('date', date('Y-m-d')) }}" id="datePicker" name="feedback_date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" data-maxzpsw="0">
          </div>
        @error('feedback_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <img src="{{asset('uploads/feedback/default_1.png')}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
          <dp-fbi></dp-fbi>
        </div>
        <div class="form-group">
            <label for="exampleInputuser1">اختر صورة</label>
            <input type="file" name="image" class="form-control image" id="exampleInputuser1" >
          <dp-fbi></dp-fbi>
        </div>


            <div class="form-group">
                <label>الاسم عربي</label>
                <textarea  name="name_ar" class="form-control " rows="3" placeholder="النص">{{old('name_ar')}}</textarea>
            </div>
            @error('name_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


        <div class="form-group">
            <label>الاسم انجليزي</label>
            <textarea  name="name_en" class="form-control" rows="3" placeholder="النص">{{old('name_en')}}</textarea>
        </div>
        @error('name_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>المكان عربي</label>
            <textarea  name="position_ar" class="form-control " rows="3" placeholder="النص">{{old('position_ar')}}</textarea>
        </div>
        @error('position_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>المكان انجليزي</label>
            <textarea  name="position_en" class="form-control " rows="3" placeholder="النص">{{old('position_en')}}</textarea>
        </div>
        @error('position_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>التقييم انجليزي</label>
            <textarea  name="feedback_en" class="form-control " rows="3" placeholder="النص">{{old('feedback_en')}}</textarea>
        </div>
        @error('feedback_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>التقييم عربي</label>
            <textarea  name="feedback_ar" class="form-control " rows="3" placeholder="النص">{{old('feedback_ar')}}</textarea>
        </div>
        @error('feedback_ar')
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

            <div class="form-group">
                <div class="checkbox">
                  <label>
                    نشط
                    <input type="checkbox" checked  id="newTitle" name="active"  value="1"/>

                  </label>
                </div>
            </div>

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>اضافة</button>
        <a href="{{ route('feedback.index') }}" class="btn btn-danger">رجوع</a>
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

        document.getElementById('datePicker').value = new Date().toDateInputValue();
    </script>
@endsection
