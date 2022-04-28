@extends('layouts.dash.app')


@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">مبيدات
            </h3>
            <a href="{{ route('mobedat_category.create') }}" class="btn bg-olive btn-lg pull-right">اضافة <i
                    class="fa fa-plus"></i> </a>

        </div>

        <div class="box-body">
            <div class="box-body">
                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-resizable="true"
                    data-cookie="true" data-show-export="true" data-locale="ar-SA" style="direction: rtl">
                    <thead>

                        <tr role="row">
                            <th data-field="state" data-checkbox="false"></th>
                            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="كود: activate to sort column ascending" aria-sort="descending">كود
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="الاسم انجليزي: activate to sort column ascending">
                                الاسم انجليزي
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="الاسم عربي: activate to sort column ascending">
                                الاسم عربي</th>

                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="الوصف عربي: activate to sort column ascending">
                                الوصف عربي</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="الصورة: activate to sort column ascending">
                                الصورة</th>


                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="النوع: activate to sort column ascending">
                                النوع</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="نشط: activate to sort column ascending">
                                نشط</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="الاعدادات: activate to sort column ascending">
                                الاعدادات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($row->count() > 0)
                            @foreach ($row as $r)
                                <tr role="row" class="odd">
                                    <td></td>
                                    <td class="sorting_1">- {{ $r->id }} -</td>
                                    <td>{{ $r->name_en }}</td>
                                    <td>{{ $r->name_ar }}</td>

                                    <td>{!! $r->description_ar !!}</td>
                                    <td> <span class="thumbnail" style="background-color: #00A65A"><img
                                                src="{{ asset('uploads/products/' . $r->image) }}" alt="" srcset=""
                                                width="200"></span> </td>


                                    <td>{{ $r->product_type->type_ar ?? '' }}</td>
                                    <td>{{ $r->active }}</td>
                                    <td>
                                        <a href="{{ route('mobedat_category.edit', $r->id) }}" class="btn btn-primary">تعديل</a>
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
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
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

                                                    <form action="{{ route('mobedat_category.destroy', $r->id) }}" method="post">
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
                                <td colspan="13">

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
