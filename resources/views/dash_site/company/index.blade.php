@extends('layouts.dash.app')

@section('page_title' , 'عن الشركة')

@section('content')

<div class="col-md-12">

    <div class="box">
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
                                        colspan="1" aria-label="كود: activate to sort column ascending"
                                        aria-sort="descending">كود
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="عن الشركة بالعربي: activate to sort column ascending">عن الشركة
                                        بالعربي
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="عن الشركة بالانجليزي: activate to sort column ascending">
                                        عن الشركة بالانجليزي</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الهدف عربي: activate to sort column ascending">
                                        الهدف عربي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الهدف انجليزي: activate to sort column ascending">
                                        الهدف انجليزي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الرؤية عربي: activate to sort column ascending">
                                        الرؤية عربي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الرؤية انجليزي: activate to sort column ascending">
                                        الرؤية انجليزي</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="فيديو الشركة: activate to sort column ascending">
                                        فيديو الشركة</th>

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
                                    <td>{{$r->overview_en}}</td>
                                    <td>{{$r->overview_ar}}</td>
                                    <td>{{$r->mission_en}}</td>
                                    <td>{{$r->mission_ar}}</td>
                                    <td>{{$r->vision_en}}</td>
                                    <td>{{$r->vision_ar}}</td>
                                    <td>
                                        {{$r->company_video}}

                                    </td>
                                    <td>
                                        <a href="{{ route('company.edit' , $r->id) }}" class="btn btn-primary">تعديل</a>
                                    </td>


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

        </div><!-- /.box-body -->
    </div>
</div>
@endsection
