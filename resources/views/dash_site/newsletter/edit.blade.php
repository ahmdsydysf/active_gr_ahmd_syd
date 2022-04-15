@extends('layouts.dash.app')

@section('page_title' , "تعديل الخبر")

@section('content')

<div class="box-body">

<div class="box box-success">

    <div class="box-header">
      <h3 class="box-title">تعديل الخبر</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('newsletter.update' ,  $row->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="input-group">
            <label for="">تاريخ المقال</label>
            <input type="date" id=""  value="{{date('Y-m-d', strtotime($row->newsletter_date))}}" name="newsletter_date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" data-maxzpsw="0">
          </div>
        @error('newsletter_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>الايميل</label>
            <input  name="email" type="email" class="form-control" placeholder="الايميل" value="{{ $row->email }}">
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror



      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>اضافة</button>
        <a href="{{ route('newsletter.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>
  </div>

@endsection


