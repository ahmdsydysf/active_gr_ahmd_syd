@extends('layouts.dash.app')

@section('page_title' , "التواصل")

@section('content')



<div class="box box-success">



    <div class="box-header">
      <h3 class="box-title">تعديل بيانات التواصل</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('company_contact.update' ,  $row->id )}}" method="POST">
        @csrf
        {{method_field('PUT')}}
      <div class="box-body">

            <div class="form-group">
                <label>عنوان انجليزي</label>
                <textarea  name="address_en" class="form-control" rows="3" placeholder="النص">{{$row->address_en}}</textarea>
            </div>
            @error('address_en')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label>عنوان انجليزي</label>
                <textarea  name="address_ar" class="form-control" rows="3" placeholder="النص">{{$row->address_ar}}</textarea>
            </div>
            @error('address_ar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >التليفون</label>
                    <input type="text" id="newTitle" name="phones" value="{{$row->phones}}" class="form-control"
                       placeholder=" التليفون">
            </div>
            @error('phones')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >الايميل</label>
                    <input type="email" id="newTitle" name="email" value="{{$row->email}}" class="form-control"
                       placeholder=" الايميل">
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >الفاكس</label>
                    <input type="text" id="newTitle" name="fax" value="{{$row->fax}}" class="form-control"
                       placeholder=" الفاكس">
            </div>
            @error('fax')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >واتس اب</label>
                    <input type="text" id="newTitle" name="whatsapp" value="{{$row->whatsapp}}" class="form-control"
                       placeholder=" واتس اب">
            </div>
            @error('whatsapp')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >خريطة جوجل</label>
                    <input type="text" id="newTitle" name="google_map" value="{{$row->google_map}}" class="form-control"
                       placeholder=" خريطة جوجل">
            </div>
            @error('google_map')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >الموقع</label>
                    <input type="text" id="newTitle" name="website" value="{{$row->website}}" class="form-control"
                       placeholder=" الموقع">
            </div>
            @error('website')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >فيسبوك</label>
                    <input type="text" id="newTitle" name="facebook" value="{{$row->facebook}}" class="form-control"
                       placeholder=" فيسبوك">
            </div>
            @error('facebook')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >تويتر</label>
                    <input type="text" id="newTitle" name="twitter" value="{{$row->twitter}}" class="form-control"
                       placeholder=" تويتر">
            </div>
            @error('twitter')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >لينكيدان</label>
                    <input type="text" id="newTitle" name="linkedin" value="{{$row->linkedin}}" class="form-control"
                       placeholder=" لينكيدان">
            </div>
            @error('linkedin')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >انستجرام</label>
                    <input type="text" id="newTitle" name="instagram" value="{{$row->instagram}}" class="form-control"
                       placeholder=" انستجرام">
            </div>
            @error('instagram')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label  >يوتيوب</label>
                    <input type="text" id="newTitle" name="youtube" value="{{$row->youtube}}" class="form-control"
                       placeholder=" يوتيوب">
            </div>
            @error('youtube')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success">تعديل</button>
        <a href="{{ route('company_contact.index') }}" class="btn btn-danger">رجوع</a>
      </div>

    </form>
  </div>

@endsection

@section('script')
    <script>
        $(".video").change(function () {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.video-preview').attr('src', e.target.result);
                        $('.video-preview').play();

                    }

                    reader.readAsDataURL(this.files[0]);
                }

        });
    </script>
@endsection
