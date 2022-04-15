<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Service_type;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::orderBy('id', 'DESC')->paginate(5);

        return view('dash_site.service.index')->with('row', $service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $ser_typ = Service_type::all();

        return view('dash_site.service.create')->with('ser_typ', $ser_typ);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            // 'blog_date' => 'required',
            'title_en'  => 'required',
            'service_en'  => 'required',
            'text_en'   => 'required',
            'text_ar'   => 'required',
            'video'   => 'required',
            'post_date'   => 'required',
            'pdf_en'   => 'required',
            'pdf_ar'   => 'required',
            'active'   => 'required',
            'image'     => 'image',
            'order'     => 'required',
        ], [
            // 'blog_date.required'   => 'هذا الحقل مطلوب ',
            'title_en.required'    => 'هذا الحقل مطلوب ',
            'service_en.required'    => 'هذا الحقل مطلوب ',
            'text_en.required'     => 'هذا الحقل مطلوب ',
            'text_ar.required'     => 'هذا الحقل مطلوب ',
            'video.required'     => 'هذا الحقل مطلوب ',
            'post_date.required'     => 'هذا الحقل مطلوب ',
            'pdf_en.required'     => 'هذا الحقل مطلوب ',
            'pdf_ar.required'     => 'هذا الحقل مطلوب ',
            'active.required'     => 'هذا الحقل مطلوب ',
            'image.image'          => 'اختر صوره',
            'order.required'       => 'هذا الحقل مطلوب ',
        ]);


        $request_data = $request->except('image', 'active', '_token');



        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            $request_data['image'] =  $imageName;

            $request->image->move(public_path('uploads/services/'), $imageName);
        } else {
            $request_data['image'] = 'default_1.png';
        }
        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }
        Service::create($request_data);

        return redirect()->route('service.index')->with('flash_success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('dash_site.service.edit')->with('row', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'blog_date' => 'required',
            'title_en'  => 'required',
            'service_en'  => 'required',
            'text_en'   => 'required',
            'text_ar'   => 'required',
            'video'   => 'required',
            'post_date'   => 'required',
            'pdf_en'   => 'required',
            'pdf_ar'   => 'required',
            'active'   => 'required',
            'image'     => 'image',
            'order'     => 'required',
        ], [
            // 'blog_date.required'   => 'هذا الحقل مطلوب ',
            'title_en.required'    => 'هذا الحقل مطلوب ',
            'service_en.required'    => 'هذا الحقل مطلوب ',
            'text_en.required'     => 'هذا الحقل مطلوب ',
            'text_ar.required'     => 'هذا الحقل مطلوب ',
            'video.required'     => 'هذا الحقل مطلوب ',
            'post_date.required'     => 'هذا الحقل مطلوب ',
            'pdf_en.required'     => 'هذا الحقل مطلوب ',
            'pdf_ar.required'     => 'هذا الحقل مطلوب ',
            'active.required'     => 'هذا الحقل مطلوب ',
            'image.image'          => 'اختر صوره',
            'order.required'       => 'هذا الحقل مطلوب ',
        ]);

        $service = Service::find($id);

        $request_data = $request->except('image', 'active', '_token');


        if ($request->image) {

            if ($service->image != 'default_1.png') {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/services/'), $imageName);

                $image_path = public_path() . '/uploads/services/' . $service->image;

                unlink($image_path);
            } else {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/services/'), $imageName);
            }
        }


        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        $service->update($request_data);

        return redirect()->route('service.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if ($service->image != 'default_1.png') {
            $image_path = public_path() . '/uploads/services/' . $service->image;
            unlink($image_path);
        }
        $service->delete();
        return redirect()->route('service.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
