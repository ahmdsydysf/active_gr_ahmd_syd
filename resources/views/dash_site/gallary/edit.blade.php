@extends('layouts.dash.app')

@section('page_title' , "تعديل المعرض")

@section('content')


<div class="box-body">

<div class="box box-success">


    <div class="box-header">
      <h3 class="box-title">تعديل البيانات</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('gallary.update' , $row->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
        <div class="box-body">
            <div class="form-group">
                <label>المسار</label>
                <textarea  name="path" class="form-control" rows="3" placeholder="النص">{{$row->path}}</textarea>
            </div>
            @error('path')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label>اختر النوع</label>
                <select class="form-control" name="type">

                  <option value="1" {{ $row->type == 1 ? 'selected' : ' ' }}  >صور</option>
                  <option value="2" {{ $row->type == 2 ? 'selected' : ' ' }}   >فيديو</option>

                </select>
            </div>
            <div class="form-group">
                <label>التصنيف</label>
                <select class="form-control" name="category_id">
                    <option value="">اختر التصنيف</option>

                    @foreach ( $gallary_cat as $gat )
                    <option value="{{$gat->id}}"  {{ $row->category_id == $gat->id ? 'selected' : ' ' }}  >{{$gat->category_ar}}</option>
                    @endforeach
                </select>
            </div>
            @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label>الوصف عربي</label>
                <textarea  name="description_ar" class="form-control" rows="3" placeholder="النص">{{$row->description_ar}}</textarea>
            </div>
            @error('description_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label>الوصف انجليزي</label>
                <textarea  name="description_en" class="form-control" rows="3" placeholder="النص">{{$row->description_en}}</textarea>
            </div>
            @error('description_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group" >
                <label for="">الترتيب</label>
                <input type="number" value="{{$row->order}}" name="order" class="form-control" id="">
            </div>
            @error('order')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <div class="checkbox">
                  <label>
                    نشط
                    <input type="checkbox" {{ $row->active == 1 ? 'checked' : ' ' }}  id="newTitle" name="active"  value="1"/>

                  </label>
                </div>
            </div>


          </div><!-- /.box-body -->

        <button type="submit" class="btn btn-success">تعديل</button>
        <a href="{{route('gallary.index')}}" class="btn btn-danger">الغاء</a>
      </div>

    </form>
  </div>
  </div>

@endsection
