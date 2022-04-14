@extends('layouts.dash.app')

@section('page_title' , "اضافة منتج")

@section('content')

<div class="box-body">

<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة منتج</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">
        <div class="form-group">
            <img src="{{asset('uploads/slider_images/default_1.png')}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
          <dp-fbi></dp-fbi>
        </div>
        <div class="form-group">
            <label for="exampleInputuser1">اختر صورة</label>
            <input type="file" name="image" class="form-control image" id="exampleInputuser1" >
          <dp-fbi></dp-fbi>
        </div>

        <div class="form-group">
            <label for="exampleInputuser1">الاسم انجليزي</label>

          <input type="text" name="name_en" value="{{old('name_en')}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="exampleInputuser1">الاسم عربي</label>

          <input type="text" name="name_ar" value="{{old('name_ar')}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('name_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الوصف انجليزي</label>
            <textarea  name="description_en" id="editor" class="form-control ckeditor" rows="3" placeholder="النص">{{old('description_en')}}</textarea>
        </div>
        @error('description_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>الوصف عربي</label>
            <textarea  name="description_ar" class="form-control ckeditor " rows="3" placeholder="النص">{{old('description_ar')}}</textarea>
        </div>
        @error('description_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>PDF انجليزي</label>
            <textarea  name="pdf_en" class="form-control" rows="3" placeholder="النص">{{old('pdf_en')}}</textarea>
        </div>
        @error('pdf_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>PDF عربي</label>
            <textarea  name="pdf_ar" class="form-control" rows="3" placeholder="النص">{{old('pdf_ar')}}</textarea>
        </div>
        @error('pdf_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>المصنع</label>
            <select class="form-control" name="factory_id">
                <option value="">اختر المصنع</option>

                @foreach ( $pro_fac as $fac )
                <option value="{{$fac->id}}">{{$fac->name_ar}}</option>
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
                <option value="{{$par->id}}">{{$par->name_ar}}</option>
                @endforeach
            </select>
        </div>
        @error('partner_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>نوع المنتج</label>
            <select class="form-control" name="type_id">
                <option value="">اختر نوع المنتج</option>

                @foreach ( $pro_typ as $typ )
                <option value="{{$typ->id}}">{{$typ->type_ar}}</option>
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
                    <input type="checkbox" checked  id="newTitle" name="active"  value="1"/>

                  </label>
                </div>
            </div>

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>اضافة</button>
        <a href="{{ route('product.index') }}" class="btn btn-danger">رجوع</a>
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
