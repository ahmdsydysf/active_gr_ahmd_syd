@extends('layouts.dash.app')

@section('page_title' , "اضافة مستخدم جديد")

@section('content')



<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة مستخدم جديد</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('users.store')}}" method="POST">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">

        <div class="form-group">
          <label for="exampleInputuser1">اسم المستخدم</label>
          <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputuser1" placeholder="برجاء ادخال اسم المستخدم" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="exampleInputEmail1">الايميل</label>
          <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" placeholder="برجاء ادخال الايميل" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="exampleInputPassword1">كلمة السر</label>
          <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="برجاء ادخال كلمة السر">
        </div>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="exampleInputPassword1">تأكيد كلمة السر</label>
          <input type="password" name="password_confirmation"  class="form-control" id="exampleInputPassword1" placeholder="برجاء ادخال كلمة السر">
        </div>
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>اضافة</button>
        <a href="{{ route('users.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>

@endsection
