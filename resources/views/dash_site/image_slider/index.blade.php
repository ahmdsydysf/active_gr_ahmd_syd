@extends('layouts.dash.app')

@section('page_title', 'سلايدر الصور')

@section('content')
    <div class="box-body">

        <a href="{{ route('slider_images.create') }}" class="btn bg-olive btn-lg pull-right">اضافة <i
                class="fa fa-plus"></i>
        </a>

    </div>

            <div class="box" style="overflow: auto">
                <div class="box-header bg-green">
                    <h3 class="box-title">كل البيانات</h3>

                </div>

                <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>


                                        <tr role="row">
                                            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="كود: activate to sort column ascending"
                                                aria-sort="descending">كود
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="الصورة: activate to sort column ascending">الصورة
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="العنوان عربي: activate to sort column ascending">
                                                العنوان عربي</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="العنوان انجليزي: activate to sort column ascending">
                                                العنوان انجليزي</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="النص عربي: activate to sort column ascending">
                                                النص عربي</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="النص انجليزي: activate to sort column ascending">
                                                النص انجليزي</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="نشط: activate to sort column ascending">
                                                نشط</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="الترتيب: activate to sort column ascending">
                                                الترتيب</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="الاعدادات: activate to sort column ascending">
                                                الاعدادات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($row->count() > 0)
                                            @foreach ($row as $r)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">- {{ $r->id }} -</td>
                                                    <td> <span class="thumbnail" style="background-color: #00A65A"><img
                                                                src="{{ asset('uploads/slider_images/' . $r->image) }}" alt=""
                                                                srcset="" width="200"></span> </td>
                                                    <td>{{ $r->title_ar }}</td>
                                                    <td>{{ $r->title_en }}</td>
                                                    <td>{{ $r->text_ar }}</td>
                                                    <td>{{ $r->text_en }}</td>
                                                    <td>{{ $r->active }}</td>
                                                    <td>{{ $r->order }}</td>
                                                    <td>
                                                        <a href="{{ route('slider_images.edit', $r->id) }}"
                                                            class="btn btn-primary">تعديل</a>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                                            data-target="#del{{ $r->id }}">
                                                            حذف
                                                        </button>
                                                    </td>
                                                    {{-- Model Of Deleting --}}
                                                    <div class="modal modal-danger" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel" id="del{{ $r->id }}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                    <h4 class="modal-title"> تأكيد الحـــــذف </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>هل تريد حذف كل البيانات</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline pull-left"
                                                                        data-dismiss="modal">الغاء</button>

                                                                    <form
                                                                        action="{{ route('slider_images.destroy', $r->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-outline">تأكيد
                                                                            الحذف</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- /Model Of Deleting --}}

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="9">

                                                    <h1>لا يوجد بيانات</h1>

                                                </td>
                                            </tr>
                                        @endif



                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>



                </div>
            </div>



@endsection
