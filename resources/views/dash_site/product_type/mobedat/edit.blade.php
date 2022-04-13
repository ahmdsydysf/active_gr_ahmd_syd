@extends('layouts.dash.app')

@section('page_title' , "تعديل ")

@section('content')

<div class="box-body">

    <div class="box box-success">



        <div class="box-header">
            <h3 class="box-title">تعديل </h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('mobedat_category.update' , $row->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="box-body">
                <div class="form-group">
                    <img src="{{asset('uploads/product_types/'.$row->image)}}" class="img-thumbnail image-preview"
                        width="350px" height="250px" alt="" srcset="">
                    <dp-fbi></dp-fbi>
                </div>
                <div class="form-group">
                    <label for="exampleInputuser1">اختر صورة</label>
                    <input type="file" name="image" class="form-control image" id="exampleInputuser1">
                    <dp-fbi></dp-fbi>
                </div>

                <div class="form-group">
                    <label>نوع التصنيف</label>
                    <select class="form-control" name="category_id">
                        <option value="">اختر النوع</option>

                        @foreach ( $all_pro_cat as $cat )
                        <option value="{{$cat->id}}" {{ $cat->id == $row->category_id ? 'selected' : ' ' }}
                            >{{$cat->category_en}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label>النوع عربي</label>
                    <input type="text" name="type_ar" value="{{$row->type_ar}}" class="form-control"
                        placeholder=" النوع عربي">
                </div>
                @error('type_ar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>النوع انجليزي</label>
                    <input type="text" name="type_en" value="{{$row->type_en}}" class="form-control"
                        placeholder=" النوع انجليزي">
                </div>
                @error('type_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الوصف عربي</label>
            <textarea name="description_ar" class="form-control" rows="3"
                placeholder="النص">{{$row->description_ar}}</textarea>
        </div>
        @error('description_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الوصف انجليزي</label>
            <textarea name="description_en" class="form-control" rows="3"
                placeholder="النص">{{$row->description_en}}</textarea>
        </div>
        @error('description_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group" style="width: 135px">
            <label for="">الترتيب</label>
            <input type="number" value="{{$row->order}}" name="order" class="form-control" id="">
        </div>
        @error('order')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


            </div>

    </div>



</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-success">تعديل</button>
    <a href="{{ route('mobedat_category.index') }}" class="btn btn-danger">رجوع</a>
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
