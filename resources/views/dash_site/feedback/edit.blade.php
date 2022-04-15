@extends('layouts.dash.app')

@section('page_title' , "تعديل التقييم")

@section('content')

<div class="box-body">

<div class="box box-success">

    <div class="box-header">
      <h3 class="box-title">تعديل التقييم</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('feedback.update' ,  $row->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="input-group">
            <label for="">تاريخ المقال</label>
            <input type="date" id=""  value="{{date('Y-m-d', strtotime($row->feedback_date))}}" name="feedback_date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" data-maxzpsw="0">
          </div>
        @error('feedback_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <img src="{{asset('uploads/feedback/' . $row->image)}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
          <dp-fbi></dp-fbi>
        </div>
        <div class="form-group">
            <label for="exampleInputuser1">اختر صورة</label>
            <input type="file" name="image" class="form-control image" id="exampleInputuser1" >
          <dp-fbi></dp-fbi>
        </div>


            <div class="form-group">
                <label>الاسم عربي</label>
                <textarea  name="name_ar" class="form-control" rows="3" placeholder="النص">{{$row->name_ar}}</textarea>
            </div>
            @error('name_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


        <div class="form-group">
            <label>الاسم انجليزي</label>
            <textarea  name="name_en" class="form-control" rows="3" placeholder="النص">{{$row->name_en}}</textarea>
        </div>
        @error('name_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>المكان عربي</label>
            <textarea  name="position_ar" class="form-control" rows="3" placeholder="النص">{{$row->position_ar}}</textarea>
        </div>
        @error('position_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>المكان انجليزي</label>
            <textarea  name="position_en" class="form-control" rows="3" placeholder="النص">{{$row->position_en}}</textarea>
        </div>
        @error('position_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>تقييم انجليزي</label>
            <textarea  name="position_en" class="form-control" rows="3" placeholder="النص">{{$row->position_en}}</textarea>
        </div>
        @error('position_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>تقييم عربي</label>
            <textarea  name="position_ar" class="form-control" rows="3" placeholder="النص">{{$row->position_ar}}</textarea>
        </div>
        @error('position_ar')
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
                    <input type="checkbox" {{ $row->active == 1 ? 'checked' : ''  }}  id="newTitle" name="active"  value="1"/>

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



    </script>
@endsection
