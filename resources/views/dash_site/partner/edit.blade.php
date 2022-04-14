@extends('layouts.dash.app')

@section('page_title' , "تعديل شريك")

@section('content')

<div class="box-body">

<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">تعديل شريك</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('partner.update' , $row->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">
        <div class="form-group">
            <img src="{{asset('uploads/partners/' . $row->logo)}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
          <dp-fbi></dp-fbi>
        </div>
        <div class="form-group">
            <label for="exampleInputuser1">اختر صورة</label>
            <input type="file" name="logo" class="form-control image" id="exampleInputuser1" >
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
            <textarea  name="description_en" class="form-control ckeditor" rows="3" placeholder="النص">{{$row->description_en}}</textarea>
        </div>
        @error('description_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الوصف عربي</label>
            <textarea  name="description_ar" class="form-control ckeditor " rows="3" placeholder="النص">{{$row->description_ar}}</textarea>
        </div>
        @error('description_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الموقع</label>
            <textarea  name="website" class="form-control ckeditor" rows="3" placeholder="النص">{{$row->website}}</textarea>
        </div>
        @error('website')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>فيسبوك</label>
            <textarea  name="facebook" class="form-control ckeditor" rows="3" placeholder="النص">{{$row->facebook}}</textarea>
        </div>
        @error('facebook')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>تويتر</label>
            <textarea  name="twitter" class="form-control ckeditor" rows="3" placeholder="النص">{{$row->twitter}}</textarea>
        </div>
        @error('twitter')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>انستجرام</label>
            <textarea  name="instgram" class="form-control ckeditor" rows="3" placeholder="النص">{{$row->instgram}}</textarea>
        </div>
        @error('instgram')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group" >
            <label for="">الترتيب</label>
            <input type="number" value="{{$row->order}}" name="order" class="form-control" id="">
        </div>
        @error('order')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> تعديل </button>
        <a href="{{ route('partner.index') }}" class="btn btn-danger">رجوع</a>
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
