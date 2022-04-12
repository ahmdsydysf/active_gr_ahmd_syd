@extends('layouts.dash.app')

@section('page_title' , 'كل الرسائل')

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
                                         aria-label="نوع الرسائل : activate to sort column ascending">نوع الرسائل
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="تاريخ الرسائل: activate to sort column ascending">
                                        تاريخ الرسائل</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="الاسم: activate to sort column ascending">
                                        الاسم</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="الموبايل: activate to sort column ascending">
                                        الموبايل</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="الايميل: activate to sort column ascending">
                                        الايميل</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="عنوان الرسالة: activate to sort column ascending">
                                        عنوان الرسالة</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                         aria-label="نص الرسالة: activate to sort column ascending">
                                        نص الرسالة</th>

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

                                    <td>{{$r->message_type->message_type_ar}}</td>

                                    <td>{{$r->message_date}}</td>
                                    <td>{{$r->name}}</td>
                                    <td>{{$r->mobile}}</td>
                                    <td>{{$r->email}}</td>
                                    <td>{{$r->subject}}</td>
                                    <td>{{$r->message}}</td>

                                    <td>
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

                                                    <form action="{{route('message.destroy' , $r->id)}}" method="post">
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

            {{ $row->links("pagination::bootstrap-4") }}

        </div><!-- /.box-body -->
    </div>
</div>
</div>
@endsection
