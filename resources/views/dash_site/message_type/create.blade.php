@extends('layouts.dash.app')

@section('page_title' , "اضافة نوع رسائل")

@section('content')


<div class="box-body">
<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة نوع رسائل</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('message_type.store')}}" method="POST">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">

        <div class="form-group">
            <label for="exampleInputuser1">نوع الرسائل بالعربي</label>

          <input type="text" name="message_type_ar" value="{{old('message_type_ar')}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('message_type_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="exampleInputuser1">نوع الرسائل بالانجليزي</label>

          <input type="text" name="message_type_en" value="{{old('message_type_en')}}" class="form-control" id="exampleInputEmail1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('message_type_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>اضافة</button>
        <a href="{{ route('message_type.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>
</div>
@endsection
