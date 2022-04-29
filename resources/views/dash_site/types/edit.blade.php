@extends('layouts.dash.app')

@section('page_title' , "تعديل ")

@section('content')

<div class="box-body">

    <div class="box box-success">



        <div class="box-header">
            <h3 class="box-title">تعديل </h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('pro-types.update' , $row->id)}}" method="POST" enctype="multipart/form-data">
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
                    <input type="file" name="img" class="form-control image" id="exampleInputuser1">
                    <dp-fbi></dp-fbi>
                </div>

                <div class="form-group">
                    <label>نوع التصنيف</label>
                    <input type="text" readonly name="category_id" value="{{$row->product_category->category_en ?? ''}}" class="form-control"
                    placeholder=" النوع عربي">
                </div>


                <div class="form-group">
                    <label>النوع عربي</label>
                    <input type="text" readonly name="type_ar" value="{{$row->type_ar}}" class="form-control"
                        placeholder=" النوع عربي">
                </div>

                <div class="form-group">
                    <label>النوع انجليزي</label>
                    <input type="text" readonly name="type_en" value="{{$row->type_en}}" class="form-control"
                        placeholder=" النوع انجليزي">
                </div>

        <div class="form-group">
            <label>الوصف عربي</label>
            <textarea name="description_ar" class="form-control" rows="3"
                placeholder="النص">{{$row->description_ar}}</textarea>
        </div>

        <div class="form-group">
            <label>الوصف انجليزي</label>
            <textarea name="description_en" class="form-control" rows="3"
                placeholder="النص">{{$row->description_en}}</textarea>
        </div>




            </div>

    </div>



</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-success">تعديل</button>
    <a href="{{ route('pro-types.index') }}" class="btn btn-danger">رجوع</a>
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
