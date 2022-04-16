<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Why_us;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $why_us = Why_us::all();

        return view('dash_site.why_us.index')->with('row', $why_us);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.why_us.create');
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
            'logo'         => ['image'],
            'name_en'      => ['required'],
            'name_ar'      => ['required'],
            'order'        => ['required']
        ], [
            'logo.image'        => 'يجب اختيار صوره',
            'name_en.required'  => 'هذا الحقل مطلوب ',
            'name_ar.required'  => 'هذا الحقل مطلوب ',
            'order.required'    => 'هذا الحقل مطلوب '
        ]);


        $request_data = $request->except('logo', '_token');



        if ($request->hasFile('logo')) {
            $logoName = $request->logo->hashName();

            $request_data['logo'] =  $logoName;

            $request->logo->move(public_path('uploads/why_us/'), $logoName);
        } else {
            $request_data['logo'] = 'default_logo.png';
        }

        Why_us::create($request_data);

        return redirect()->route('why_us.index')->with('flash_success', 'تم الاضافة بنجاح');
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

        $why_us = Why_us::find($id);
        return view('dash_site.why_us.edit')->with('row', $why_us);
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


        $why_us = Why_us::find($id);


        $this->validate($request, [
            'logo'         => ['image'],
            'name_en'      => ['required'],
            'name_ar'      => ['required'],
            'order'        => ['required']
        ], [
            'logo.image'        => 'يجب اختيار صوره',
            'name_en.required'  => 'هذا الحقل مطلوب ',
            'name_ar.required'  => 'هذا الحقل مطلوب ',
            'order.required'    => 'هذا الحقل مطلوب '
        ]);


        $request_data = $request->except('logo', '_token');



        if ($request->logo) {

            if ($why_us->logo != 'default_logo.png') {
                $logoName = $request->logo->hashName();

                $request_data['logo'] =  $logoName;

                $request->logo->move(public_path('uploads/why_us/'), $logoName);

                $logo_path = public_path() . '/uploads/why_us/' . $why_us->logo;

                unlink($logo_path);
            } else {
                $logoName = $request->logo->hashName();

                $request_data['logo'] =  $logoName;

                $request->logo->move(public_path('uploads/why_us/'), $logoName);
            }
        }

        $why_us->update($request_data);

        return redirect()->route('why_us.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $why_us = Why_us::find($id);

        if ($why_us->logo != 'default_logo.png') {
            $logo_path = public_path() . '/uploads/why_us/' . $why_us->logo;
            unlink($logo_path);
        }
        $why_us->delete();
        return redirect()->route('why_us.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
