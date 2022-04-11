@extends('layouts.dash.app')

@section('page_title' , "تعديل لماذا نحن")

@section('content')


<div class="box-body">
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">تعديل لماذا نحن</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('why_us.update' ,  $row->id )}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="box-body">
                <div class="form-group">
                    <img src="{{asset('uploads/why_us/' . $row->logo)}}" class="img-thumbnail image-preview"
                        width="350px" height="250px" alt="" srcset="">
                    <dp-fbi></dp-fbi>
                </div>
                <div class="form-group">
                    <label for="exampleInputuser1">اختر لوجو</label>
                    <input type="file" name="logo" class="form-control image" id="exampleInputuser1">
                    <dp-fbi></dp-fbi>
                </div>


                <div class="form-group">
                    <label>الاسم عربي</label>
                    <textarea name="name_ar" class="form-control" rows="3"
                        placeholder="النص">{{$row->name_ar}}</textarea>
                </div>
                @error('name_ar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label>الاسم انجليزي</label>
                    <textarea name="name_en" class="form-control" rows="3"
                        placeholder="النص">{{$row->name_en}}</textarea>
                </div>
                @error('name_en')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <div class="form-group" style="width: 135px">
                    <label for="">الترتيب</label>
                    <input type="number" value="{{$row->order}}" name="order" class="form-control" id="">
                </div>
                @error('order')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-success">تعديل</button>
                <a href="{{ route('why_us.index') }}" class="btn btn-danger">رجوع</a>
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
</script>
@endsection
