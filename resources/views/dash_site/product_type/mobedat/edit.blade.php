@extends('layouts.dash.app')

@section('page_title' , "تعديل منتج")

@section('content')

<div class="box-body">

<div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">تعديل منتج</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('mobedat_category.update' , $row->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="form-group">
            <img src="{{asset('uploads/products/' . $row->image)}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
          <dp-fbi></dp-fbi>
        </div>
        <div class="form-group">
            <label for="exampleInputuser1">اختر صورة</label>
            <input type="file" name="image" class="form-control image" id="exampleInputuser1" >
          <dp-fbi></dp-fbi>
        </div>

        <div class="form-group">
            <label for="exampleInputuser1">الاسم انجليزي</label>

          <input type="text" name="name_en" value="{{$row->name_en}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="exampleInputuser1">الاسم عربي</label>

          <input type="text" name="name_ar" value="{{$row->name_ar}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الوصف انجليزي</label>
            <textarea  name="description_en" id="editor" class="form-control " rows="3" placeholder="النص">{{$row->description_en}}</textarea>
        </div>
        @error('description_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الوصف عربي</label>
            <textarea  name="description_ar" class="form-control  " rows="3" placeholder="النص">{{$row->description_ar}}</textarea>
        </div>
        @error('description_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="col-md-6">
            <div class="form-group">
                <label for="">اضافة  ملف عربي</label>

                <input type="file" name="pdf_ar" class="custom-file-input"
                id="inputGroupFile03" />
                <label class="custom-file-label"
                for="inputGroupFile03">{{ $row->pdf_ar ?? '' }}</label>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">اضافة  ملف أنجليزى</label>

                <input type="file" name="pdf_en" class="custom-file-input"
                id="inputGroupFile04" />
                <label class="custom-file-label"
                for="inputGroupFile04">{{ $row->pdf_en ?? '' }}</label>

            </div>
        </div>


        <div class="form-group">
            <label>المصنع</label>
            <select class="form-control" name="factory_id">
                <option value="">اختر المصنع</option>

                @foreach ( $pro_fac as $fac )
                <option value="{{$fac->id}}" {{ $row->factory_id == $fac->id ? 'selected' : ' ' }} >{{$fac->name_ar}}</option>
                @endforeach
            </select>
        </div>
        @error('factory_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الشريك</label>
            <select class="form-control" name="partner_id">
                <option value="">اختر الشريك</option>

                @foreach ( $pro_par as $par )
                <option value="{{$par->id}}"  {{ $row->partner_id == $par->id ? 'selected' : ' ' }} >{{$par->name_ar}}</option>
                @endforeach
            </select>
        </div>
        @error('partner_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>نوع المنتج</label>
            <select class="form-control" name="type_id">

                @foreach ( $pro_typ as $typ )
                <option value="{{$typ->id}}"  {{ $row->type_id == $typ->id  ? 'selected' : '' }} >{{$typ->type_ar}}</option>
                @endforeach
            </select>
        </div>
        @error('type_id')
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
        <a href="{{ route('mobedat_category.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>
  </div>

@endsection

@section('script')
    <script>
// ClassicEditor
//     .create( document.querySelector( '#editor' ), {
//         toolbar: {
//     items: [
//         'heading', '|',
//         'alignment', '|',
//         'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
//         'link', '|',
//         'bulletedList', 'numberedList', 'todoList',
//         '-', // break point
//         'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor', '|',
//         'code', 'codeBlock', '|',
//         'insertTable', '|',
//         'outdent', 'indent', '|',
//         'uploadImage', 'blockQuote', '|',
//         'undo', 'redo'
//     ],
//     shouldNotGroupWhenFull: true},
//         heading: {
//             options: [
//                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
//                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
//                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
//             ]
//         },
//         language: {
//             // The UI will be English.
//             ui: 'ar',

//             // But the content will be edited in Arabic.
//             content: 'ar'
//         }
//     } )
//     .catch( error => {
//         console.log( error );
//     } );

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
