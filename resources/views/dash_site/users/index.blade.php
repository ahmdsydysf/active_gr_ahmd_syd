@extends('layouts.dash.app')

@section('page_title' , 'كل المستخدميين')

@section('content')
<div class="col ">
    <div class="box ">
        <div class="box-header ">
            <h3 class="box-title pull-left">بيانات كل المستخدميين</h3>


            <a class="btn bg-olive margin pull-right" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> اضافة
                مستخدم </a>


        </div><!-- /.box-header -->
        <div class="box-body ">
            <table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-resizable="true" data-cookie="true"
            data-show-export="true" data-locale="ar-SA"  style="direction: rtl" >
            <thead>
                <tr class="bg-success">
                    <th>ID</th>
                    <th>الاسم</th>
                    <th>الايميل</th>

                    <th>المزيد</th>
                </tr>

            </thead>

                    <tbody>

                    @if ($row->count() > 0)
                    @foreach ( $row as $r )
                    <tr>
                        <td>- {{$r->id}} -</td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->email}}</td>

                        <td>
                            <a href="{{ route('users.edit' , $r->id) }}" class="btn btn-primary">تعديل</a>
                            {{-- <a href="{{ route('users.show' , $r->id) }}" class="label label-danger"></a>
                            --}}

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#del{{$r->id}}"> حذف</button>
                                                             <!-- Delete Modal -->
                             <div class="modal modal-danger" id="del{{ $r->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <form action="{{ route('users.destroy', $r->id) }}"  method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h5 class="modal-title" id="exampleModalLabel">تأكيد الحذف</h5>
                                            </button>
                                        </div>
                                        <div class="modal-body bg-light">
                                            <p><i class="fa fa-fire "></i></p>
                                            <p>حذف جميع البيانات ؟</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline pull-left"
                                                data-dismiss="modal">الغاء</button>
                                            <button type="submit" class="btn btn-outline">حفظ </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                                <div class="col-md-4 col-md-offset-4 modle-info">
                                                    <h1>الاسم : </h1>
                                                    <h3> {{$r->name}} </h3>
                                                </div>
                                                <div class="col-md-4 col-md-offset-4 modle-info">
                                                    <h1>الايميل : </h1>
                                                    <h3> {{$r->email}} </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">الغاء</button>
                                            <form action="{{ route('users.destroy' , $r->id )}}" method="POST">
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
