@extends('layouts.dash.app')

@section('page_title' , 'الخدمات')

@section('content')
<div class="box-body">

<div class="col-md-12">

    <div class="box"  style="overflow: auto">
        <div class="box-header bg-green">
            <h3 class="box-title">كل البيانات</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable no-footer" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1"
                                        aria-label="كود: activate to sort column ascending" aria-sort="descending">كود
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="عنوان انجليزي: activate to sort column ascending">عنوان انجليزي
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="خدمات انجليزي: activate to sort column ascending">
                                        خدمات انجليزي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="النص انجليزي: activate to sort column ascending">
                                        النص انجليزي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="النص عربي: activate to sort column ascending">
                                        النص عربي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="الصوره: activate to sort column ascending">
                                        الصوره</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="الفيديو: activate to sort column ascending">
                                         الفيديو</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="تاريخ المنشور: activate to sort column ascending">
                                         تاريخ المنشور</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="pdf عربي: activate to sort column ascending">
                                         pdf عربي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="pdf انجليزي: activate to sort column ascending">
                                         pdf انجليزي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="نوع الخدمه: activate to sort column ascending">
                                         نوع الخدمه</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="الترتيب: activate to sort column ascending">
                                         الترتيب</th>
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
                                @foreach ( $row as $r )
                                <tr role="row" class="odd">
                                    <td class="sorting_1">- {{$r->id}} -</td>
                                    <td>{{$r->title_en}}</td>
                                    <td>{{$r->service_en}}</td>
                                    <td>{{$r->text_en}}</td>
                                    <td>{{$r->text_ar}}</td>
                                    <td> <span class="thumbnail" style="background-color: #00A65A"><img src="{{asset('uploads/services/'.$r->image)}}" alt="" srcset="" width="200"></span> </td>
                                    <td>{{$r->video}}</td>
                                    <td>{{$r->post_date}}</td>
                                    <td>{{$r->pdf_en}}</td>
                                    <td>{{$r->pdf_ar}}</td>
                                    <td>{{$r->service_type->service_type ?? ''}}</td>
                                    <td>{{$r->order}}</td>
                                    <td>{{$r->active}}</td>
                                    <td>
                                        <a href="{{ route('service.edit' , $r->id) }}" class="btn btn-primary">تعديل</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#del{{$r->id}}">
                                            حذف
                                        </button>
                                    </td>
                                    {{-- Model Of Deleting --}}
                                    <div class="modal modal-danger" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" id="del{{$r->id}}">
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

                                                    <form action="{{route('service.destroy' , $r->id)}}" method="post">
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

            <a class="btn bg-olive" href="{{ route('service.create') }}"><i class="fa fa-plus"></i>
                اضافة
            </a>
            {{ $row->links("pagination::bootstrap-4") }}

        </div><!-- /.box-body -->
    </div>
</div>
</div>
@endsection
