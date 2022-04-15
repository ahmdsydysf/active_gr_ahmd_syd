@extends('layouts.dash.app')

@section('page_title' , "تعديل العقود")

@section('content')


<div class="box-body">
<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">تعديل العقود</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('contract.update' ,  $row->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="form-group">
            <img src="{{asset('uploads/contracts/' . $row->image)}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
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
            <label>الوصف عربي</label>
            <textarea  name="desc_ar" class="form-control" rows="3" placeholder="النص">{{$row->desc_ar}}</textarea>
        </div>
        @error('desc_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الوصف انجليزي</label>
            <textarea  name="desc_en" class="form-control" rows="3" placeholder="النص">{{$row->desc_en}}</textarea>
        </div>
        @error('desc_en')
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
        <a href="{{ route('contract.index') }}" class="btn btn-danger">رجوع</a>
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
