@extends('layouts.dash.app')

@section('page_title' , 'التواصل')

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title" >التواصل  </h3>

  </div>

        <div class="box-body">
            <div class="box-body">
                <table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-resizable="true" data-cookie="true"
                data-show-export="true" data-locale="ar-SA"  style="direction: rtl" >
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



</div>
</div>

</div>
</div>
@endsection
