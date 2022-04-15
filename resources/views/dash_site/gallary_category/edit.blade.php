@extends('layouts.dash.app')

@section('page_title' , "تعديل التصنيف")

@section('content')


<div class="box-body">
<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">تعديل التصنيف</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('gallary_category.update' ,  $row->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="form-group">
            <label for="exampleInputuser1">التصنيف عربي</label>

          <input type="text" name="category_ar" value="{{$row->category_ar}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('category_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="exampleInputuser1">التصنيف انجليزي</label>

          <input type="text" name="category_en" value="{{$row->category_en}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('category_en')
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


      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success">تعديل</button>
        <a href="{{ route('gallary_category.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>
  </div>

@endsection
