@extends('layouts.dash.app')

@section('page_title' , "اضافة خبر")

@section('content')

<div class="box-body">

<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة خبر</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('newsletter.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">
        <div class="input-group">
            <label for="">تاريخ الخبر</label>
            <input type="date" value="{{ old('date', date('Y-m-d')) }}" id="datePicker" name="newsletter_date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" data-maxzpsw="0">
        </div>
        @error('newsletter_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الايميل</label>
            <input  name="email" type="email" class="form-control" placeholder="الايميل" value="{{ old('email') }}">
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
