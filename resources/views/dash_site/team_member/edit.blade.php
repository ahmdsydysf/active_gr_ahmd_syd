@extends('layouts.dash.app')

@section('page_title' , "تعديل عضو")

@section('content')

<div class="box-body">

<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">تعديل عضو</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('team_member.update' , $row->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="form-group">
            <label for="exampleInputuser1">الاسم انجليزي</label>

          <input type="text" name="name_en" value="{{$row->name_en}}" class="form-control" id="exampleInputEmail1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="exampleInputuser1">الاسم عربي</label>

          <input type="text" name="name_ar" value="{{$row->name_ar}}" class="form-control" id="exampleInputEmail1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="exampleInputuser1">المركز عربي</label>

          <input type="text" name="position_ar" value="{{$row->position_ar}}" class="form-control" id="exampleInputEmail1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('position_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="exampleInputuser1">المركز انجليزي</label>

          <input type="text" name="position_en" value="{{$row->position_en}}" class="form-control" id="exampleInputEmail1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('position_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label  >فيسبوك</label>
                <input type="text" id="newTitle" name="facebook" value="{{$row->facebook}}" class="form-control"
                   placeholder=" فيسبوك">
        </div>


        <div class="form-group">
            <label  >تويتر</label>
                <input type="text" id="newTitle" name="twitter" value="{{$row->twitter}}" class="form-control"
                   placeholder=" تويتر">
        </div>




        <div class="form-group">
            <label  >انستجرام</label>
                <input type="text" id="newTitle" name="instagram" value="{{$row->instagram}}" class="form-control"
                   placeholder=" انستجرام">
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="">اضافة صورة</label>

                <div class="custom-file">
                    <input type="file" name="img"
                        class="custom-file-input"
                        id="inputGroupFile02" />
                    <label class="custom-file-label"
                        for="inputGroupFile02">{{ $row->image ?? '' }}</label>
                </div>
            </div>
        </div>



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
                    <input type="checkbox"  {{$row->active == 1 ? 'checked' : '' }}   id="newTitle" name="active"  value="1"/>

                  </label>
                </div>
            </div>

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> تعديل </button>
        <a href="{{ route('team_member.index') }}" class="btn btn-danger">رجوع</a>
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

        document.getElementById('datePicker').value = new Date().toDateInputValue();
    </script>
@endsection
