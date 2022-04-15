@extends('layouts.dash.app')

@section('page_title' , "اضافة خدمة")

@section('content')

<div class="box-body">

<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">اضافة خدمة</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('POST')}}
      <div class="box-body">
        <div class="form-group">
            <img src="{{asset('uploads/services/default_1.png')}}" class="img-thumbnail image-preview" width="350px" height="250px" alt="" srcset="">
          <dp-fbi></dp-fbi>
        </div>
        <div class="form-group">
            <label for="exampleInputuser1">اختر صورة</label>
            <input type="file" name="image" class="form-control image" id="exampleInputuser1" >
          <dp-fbi></dp-fbi>
        </div>
        <div class="form-group">
            <label>لينك الفيديو</label>
            <textarea  name="video" class="form-control " rows="3" placeholder="النص">{{old('video')}}</textarea>
        </div>
        @error('video')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="exampleInputuser1">العنوان انجليزي</label>

          <input type="text" name="title_en" value="{{old('title_en')}}" class="form-control" id="exampleInputuser1" data-maxzpsw="0">
        <dp-fbi></dp-fbi>
        </div>
        @error('title_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <div class="form-group">
            <label for="exampleInputuser1">الخدمة انجليزي</label>
            <textarea  name="service_en" class="form-control" rows="3" placeholder="النص">{{old('service_en')}}</textarea>
        <dp-fbi></dp-fbi>
        </div>
        @error('service_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <div class="form-group">
            <label>النص انجليزي</label>
            <textarea  name="text_en" id="editor" class="form-control" rows="3" placeholder="النص">{{old('text_en')}}</textarea>
        </div>
        @error('text_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>النص عربي</label>
            <textarea  name="text_ar" class="form-control " rows="3" placeholder="النص">{{old('text_ar')}}</textarea>
        </div>
        @error('text_ar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="input-group">
            <label for="">تاريخ المنشور</label>
            <input type="date" value="{{ old('date', date('Y-m-d')) }}" id="datePicker" name="post_date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" data-maxzpsw="0">
          </div>
        @error('post_date')
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
            <label>نوع الخدمة</label>
            <select class="form-control" name="service_type_id">
                <option value="">اختر نوع الخدمة</option>
                @foreach ( $ser_typ as $typ )
                <option value="{{$typ->id}}">{{$typ->service_type}}</option>
                @endforeach
            </select>
        </div>
        @error('service_type_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group" style="width: 135px">
            <label for="">الترتيب</label>
            <input type="number"
                value="{{old('order')}}"
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
                    <input type="checkbox" checked  id="newTitle" name="active"  value="1"/>

                  </label>
                </div>
            </div>

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>اضافة</button>
        <a href="{{ route('service.index') }}" class="btn btn-danger">رجوع</a>
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
