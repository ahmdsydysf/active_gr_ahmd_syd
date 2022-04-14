@extends('layouts.dash.app')

@section('page_title' , "اضافة مصنع")

@section('content')


<div class="box-body">
<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة مصنع</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('factory.store')}}" method="POST">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">

        <div class="form-group">
            <label for="exampleInputuser1">اسم المصنع بالعربي</label>

          <input type="text" name="name_ar" value="{{old('name_ar')}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="exampleInputuser1">اسم المصنع بالانجليزي</label>

          <input type="text" name="name_en" value="{{old('name_en')}}" class="form-control" id="exampleInputEmail1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>اضافة</button>
        <a href="{{ route('factory.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>
</div>
@endsection
