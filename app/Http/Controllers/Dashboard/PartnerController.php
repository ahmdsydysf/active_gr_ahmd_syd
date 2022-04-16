<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::all();
        return view('dash_site.partner.index')->with('row', $partner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'name_en'            => ['required'],
                'name_ar'            => ['required'],
                'description_en'     => ['required'],
                'description_ar'     => ['required'],
                'website'            => ['required'],
                'facebook'           => ['required'],
                'twitter'            => ['required'],
                'instgram'           => ['required'],
                'order'              => ['required'],
                'logo'               => ['image'],
            ],
            [
                'name_en.required' => 'هذا الحقل مطلوب',
                'name_ar.required' => 'هذا الحقل مطلوب',
                'website.required' => 'هذا الحقل مطلوب',
                'facebook.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'twitter.required' => 'هذا الحقل مطلوب',
                'instgram.required' => 'هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
                'logo.image' => ' مطلوب صورة'
            ]
        );


        $request_data = $request->except('logo', '_token');

        if ($request->hasFile('logo')) {
            $logoName = $request->logo->hashName();

            $request_data['logo'] =  $logoName;

            $request->logo->move(public_path('uploads/partners/'), $logoName);
        } else {
            $request_data['logo'] = 'default_1.png';
        }


        Partner::create($request_data);

        return redirect()->route('partner.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $partner = Partner::find($id);

        return view('dash_site.partner.edit', ['row' => $partner]);
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
        $this->validate(
            $request,
            [
                'name_en'            => ['required'],
                'name_ar'            => ['required'],
                'description_en'     => ['required'],
                'description_ar'     => ['required'],
                'website'            => ['required'],
                'facebook'           => ['required'],
                'twitter'            => ['required'],
                'instgram'           => ['required'],
                'order'              => ['required'],
                'logo'               => ['image'],
            ],
            [
                'name_en.required' => 'هذا الحقل مطلوب',
                'name_ar.required' => 'هذا الحقل مطلوب',
                'website.required' => 'هذا الحقل مطلوب',
                'facebook.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'twitter.required' => 'هذا الحقل مطلوب',
                'instgram.required' => 'هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
                'logo.image' => ' مطلوب صورة'
            ]
        );

        $request_data = $request->except('logo', '_token');

        $partner = Partner::find($id);

        if ($request->logo) {

            if ($partner->logo != 'default_1.png') {
                $logoName = $request->logo->hashName();

                $request_data['logo'] =  $logoName;

                $request->logo->move(public_path('uploads/partners/'), $logoName);

                $logo_path = public_path() . '/uploads/partners/' . $partner->logo;

                unlink($logo_path);
            } else {
                $logoName = $request->logo->hashName();

                $request_data['logo'] =  $logoName;

                $request->logo->move(public_path('uploads/partners/'), $logoName);
            }
        }


        $partner->update($request_data);

        return redirect()->route('partner.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        if ($partner->logo != 'default_1.png') {
            $logo_path = public_path() . '/uploads/partners/' . $partner->logo;
            unlink($logo_path);
        }
        $partner->delete();
        return redirect()->route('partner.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
