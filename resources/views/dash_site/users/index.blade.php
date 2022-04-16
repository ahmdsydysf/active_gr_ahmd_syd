@extends('layouts.dash.app')

@section('page_title' , 'كل المستخدميين')

@section('content')

{{--
    <div class="box-body">
<div class="col-md-12">

    <div class="box"  style="overflow: auto">
        <div class="box-header bg-green">
            <h3 class="box-title">كل البيانات</h3>

        </div>

        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>



                              </tbody>
                        </table>
                    </div>
                </div>

            </div>



        </div>
    </div>

    <a class="btn bg-olive btn-lg" href="{{ route('users.create') }}"><i class="fa fa-plus"></i>
        اضافة
    </a>

</div>
</div>

    --}}
<div class="box-body">
<div class="col-md-12">

    <div class="box"  style="overflow: auto">
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
                                        colspan="1" style="width: 10%;"
                                        aria-label="كود: activate to sort column ascending" aria-sort="descending">كود
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        style="width: 35%;" aria-label="اسم: activate to sort column ascending">اسم
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        style="width: 35%;" aria-label="الايميل: activate to sort column ascending">
                                        الايميل</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        style="width: 20%;" aria-label="الاعدادات: activate to sort column ascending">
                                        الاعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($row->count() > 0)
                                @foreach ( $row as $r )
                                <tr role="row" class="odd">
                                    <td class="sorting_1">- {{$r->id}} -</td>
                                    <td>{{$r->name}}</td>
                                    <td>{{$r->email}}</td>
                                    <td>
                                        <a href="{{ route('users.edit' , $r->id) }}" class="btn btn-primary">تعديل</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#del{{$r->id}}">
                                            حذف
                                        </button>
                                    </td>
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

                                                    <form action="{{route('users.destroy' , $r->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline">تأكيد
                                                            الحذف</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach

                                @else
                                <tr>
                                    <td colspan="4">
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

    <a class="btn bg-olive btn-lg" href="{{ route('users.create') }}"><i class="fa fa-plus"></i>
        اضافة
    </a>

</div>
</div>
@endsection


@section('script')

@endsection
