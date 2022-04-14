@extends('layouts.dash.app')

@section('page_title' , "تعديل المصنع")

@section('content')


<div class="box-body">

<div class="box box-success">


    <div class="box-header">
      <h3 class="box-title">تعديل البيانات</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('factory.update' , $row->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">

        <div class="form-group">
          <label for="exampleInputuser1">اسم المصنع عربي</label>
          <input type="text" name="name_ar" value="{{$row->name_ar}}" class="form-control" id="exampleInputuser1" placeholder="برجاء ادخال اسم نوع الرسائل" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="exampleInputuser1">اسم المصنع انجليزي</label>
          <input type="text" name="name_en" value="{{$row->name_en}}" class="form-control" id="exampleInputuser1" placeholder="برجاء ادخال اسم نوع الرسائل" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <div class="box-footer">
        <button type="submit" class="btn btn-success">تعديل</button>
        <a href="{{route('factory.index')}}" class="btn btn-danger">الغاء</a>
      </div>

    </form>
  </div>
  </div>

@endsection
