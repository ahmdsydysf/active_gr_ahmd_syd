@extends('layouts.dash.app')

@section('page_title' , 'التواصل')

@section('content')

<div class="col-md-12">

    <div class="box">
        <div class="box-header bg-green">
            <h3 class="box-title">كل البيانات</h3>
        </div><!-- /.box-header -->
        <div class="box-body" style="overflow: auto">
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
                                        aria-label="عنوان انجليزي: activate to sort column ascending">عنوان انجليزي
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="عنوان عربي: activate to sort column ascending">
                                        عنوان عربي</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الهاتف: activate to sort column ascending">
                                        الهاتف</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="البريد الالكتروني: activate to sort column ascending">
                                        البريد الالكتروني</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الفاكس: activate to sort column ascending">
                                        الفاكس</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الواتس اب: activate to sort column ascending">
                                        الواتس اب</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="خريطة جوجل: activate to sort column ascending">
                                        خريطة جوجل</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الموقع: activate to sort column ascending">
                                        الموقع</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="الفيسبوك: activate to sort column ascending">
                                        الفيسبوك</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="تويتر: activate to sort column ascending">
                                        تويتر</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="لينكيدان: activate to sort column ascending">
                                        لينكيدان</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="انستجرام: activate to sort column ascending">
                                        انستجرام</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="يوتيوب: activate to sort column ascending">
                                        يوتيوب</th>

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
                                    <td>{{$r->address_en}}</td>
                                    <td>{{$r->address_ar}}</td>
                                    <td>{{$r->phones}}</td>
                                    <td>{{$r->email}}</td>
                                    <td>{{$r->fax}}</td>
                                    <td>{{$r->whatsapp}}</td>
                                    <td>{{$r->google_map}}</td>
                                    <td>{{$r->website}}</td>
                                    <td>{{$r->facebook}}</td>
                                    <td>{{$r->twitter}}</td>
                                    <td>{{$r->linkedin}}</td>
                                    <td>{{$r->instagram}}</td>
                                    <td>{{$r->youtube}}</td>
                                    <td>
                                        <a href="{{ route('company_contact.edit' , $r->id) }}" class="btn btn-primary">تعديل</a>
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
