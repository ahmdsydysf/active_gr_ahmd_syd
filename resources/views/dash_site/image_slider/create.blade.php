@extends('layouts.dash.app')

@section('page_title' , "اضافة لمعرض الصور ")

@section('content')



<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة لمعرض الصور </h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('slider_images.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">

        <div class="form-group">
            <label for="exampleInputuser1">اختر صورة</label>
            <input type="file" name="image" class="form-control" id="exampleInputuser1" >
          <dp-fbi></dp-fbi>
        </div>


            <div class="form-group">
                <label>العنوان عربي</label>
                <textarea  name="title_ar" class="form-control" rows="3" placeholder="النص">{{old('title_ar')}}</textarea>
            </div>
            @error('title_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


        <div class="form-group">
            <label>العنوان انجليزي</label>
            <textarea  name="title_en" class="form-control" rows="3" placeholder="النص">{{old('title_en')}}</textarea>
        </div>
        @error('title_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>النص عربي</label>
            <textarea  name="text_ar" class="form-control" rows="3" placeholder="النص">{{old('text_ar')}}</textarea>
        </div>
        @error('text_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>النص انجليزي</label>
            <textarea  name="text_en" class="form-control" rows="3" placeholder="النص">{{old('text_en')}}</textarea>
        </div>
        @error('text_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="form-group" style="width: 135px">
                <label for="">الترتيب</label>
                <input type="number"
                    value="{{old('order')}}"
                    name="order" class="form-control"
                    id="">
            </div>


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
        <a href="{{ route('slider_images.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>

@endsection
