@extends('layouts.dash.app')

@section('page_title' , 'كل المستخدميين')

@section('content')
<div class="col ">
    <div class="box ">
        <div class="box-header ">
            <h3 class="box-title pull-left">بيانات كل المستخدميين</h3>


            <a class="btn bg-olive margin pull-right" href="{{ route('dashboard.users.create') }}"><i class="fa fa-plus"></i> اضافة
                مستخدم </a>


        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding ">
            <table class="table table-hover ">
                <tbody>
                    <tr class="bg-success">
                        <th>ID</th>
                        <th>الاسم</th>
                        <th>الايميل</th>

                        <th>المزيد</th>
                    </tr>


                    @if ($row->count() > 0)
                    @foreach ( $row as $r )
                    <tr>
                        <td>- {{$r->id}} -</td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->email}}</td>

                        <td>
                            <a href="{{ route('dashboard.users.edit' , $r->id) }}" class="btn btn-primary">تعديل</a>
                            {{-- <a href="{{ route('dashboard.users.show' , $r->id) }}" class="label label-danger"></a>
                            --}}

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#gridSystemModal{{$r->id}}"> حذف</button>
                            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"
                                id="gridSystemModal{{$r->id}}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="gridSystemModalLabel">تأكيد الحذف</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12">هل تريد حذف هذا المستخدم</div>
                                                <div class="col-md-4 col-md-offset-4 bg-danger">
                                                    <h1>الاسم : </h1>
                                                    <h3> {{$r->name}} </h3>
                                                </div>
                                                <div class="col-md-4 col-md-offset-4">
                                                    <h1>الايميل : </h1>
                                                    <h3> {{$r->email}} </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">الغاء</button>
                                            <form action="{{route('dashboard.users.destroy' , $r->id )}}" method="POST">
                                                @csrf
                                                {{method_field('DELETE')}}

                                                <button type="submit" class="btn btn-danger">تاكيد الحذف</button>
                                            </form>

                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </td>
                    </tr>


                    @endforeach

                    @else
                    <tr>
                        <h1> لا يوجد مستخدميين مسجلين حتي الان </h1>
                    </tr>

                    @endif



                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
@endsection
