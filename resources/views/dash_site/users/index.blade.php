@extends('layouts.dash.app')

@section('page_title' , 'كل المستخدميين')

@section('content')
<div class="col-xs-12">
    <div class="box ">
        <div class="box-header d-flex justify-content-between">
            <h3 class="box-title">بيانات كل المستخدميين</h3>


            <a class="btn bg-olive margin" href="{{ route('dashboard.users.create') }}"><i class="fa fa-plus"></i> اضافة
                مستخدم </a>


        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding ">
            <table class="table table-hover ">
                <tbody>
                    <tr class="bg-success">
                        <th>ID</th>
                        <th>الاسم</th>
                        <th>الايميل</th>
                        <th>الباسوورد</th>
                        <th>المزيد</th>
                    </tr>


                    @if ($row->count() > 0)
                    @foreach ( $row as $r )
                    <tr>
                        <td>- {{$r->id}} -</td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->email}}</td>
                        <td>{{$r->password}}</td>
                        <td>
                            <a href="{{ route('dashboard.users.edit' , $r->id) }}" class="label label-primary">تعديل</a>
                            <a class="label label-danger">حذف</a>

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
