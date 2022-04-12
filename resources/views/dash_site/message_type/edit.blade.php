@extends('layouts.dash.app')

@section('page_title' , "تعديل نوع الرسائل")

@section('content')


<div class="box-body">

<div class="box box-success">


    <div class="box-header">
      <h3 class="box-title">تعديل البيانات</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('message_type.update' , $row->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">

        <div class="form-group">
          <label for="exampleInputuser1">نوع الرسائل بالعربي</label>
          <input type="text" name="message_type_ar" value="{{$row->message_type_ar}}" class="form-control" id="exampleInputuser1" placeholder="برجاء ادخال اسم نوع الرسائل" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('message_type_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="exampleInputuser1">نوع الرسائل بالانجليزي</label>
          <input type="text" name="message_type_en" value="{{$row->message_type_en}}" class="form-control" id="exampleInputuser1" placeholder="برجاء ادخال اسم نوع الرسائل" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('message_type_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <div class="box-footer">
        <button type="submit" class="btn btn-success">تعديل</button>
        <a href="{{route('message_type.index')}}" class="btn btn-danger">الغاء</a>
      </div>

    </form>
  </div>
  </div>

@endsection
