@extends('layouts.dash.app')

@section('page_title', 'اعضاء الفريق')

@section('content')
    <div class="box-body">

        <div class="col-md-12">

            <div class="box">

                <div class="box-body">
                    <div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-resizable="true" data-cookie="true" data-show-export="true" data-locale="ar-SA"
                                    style="direction: rtl">
                                    <thead>
                                        <th data-field="state" data-checkbox="false"></th>
                                        <th data-field="id">#</th>
                                        <th> تليفون</th>
                                        <th> الاسم </th>
                                        <th> البريد الالكتروني</th>
                                        <th> الرسالة</th>
                                        <th> الاسم </th>
                                        <th> البريد الالكتروني</th>
                                        <th> الرسالة</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($row as $index => $r)
                                            <tr>
                                                <td></td>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $r->name_ar }}</td>
                                                <td>{{ $r->name_en }}</td>
                                                <td>{{ $r->position_ar }}</td>
                                                <td>{{ $r->position_en }}</td>
                                                <td>{{ $r->active }}</td>
                                                <td>{{ $r->order }}</td>
                                                <td>
                                                    <a href="{{ route('team_member.edit', $r->id) }}"
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

                                                                <form action="{{ route('team_member.destroy', $r->id) }}"
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


                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>

                    <a class="btn bg-olive" href="{{ route('team_member.create') }}"><i class="fa fa-plus"></i>
                        اضافة
                    </a>

                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
