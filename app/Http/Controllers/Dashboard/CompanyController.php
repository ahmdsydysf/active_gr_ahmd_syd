<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();

        return view('dash_site.company.index')->with('row', $company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('dash_site.company.edit')->with('row', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {


        $this->validate($request, [
            'overview_en'  => 'required',
            'overview_ar'  => 'required',
            'mission_en'   => 'required',
            'mission_ar'   => 'required',
            'vision_en'    => 'required',
            'vision_ar'    => 'required',
            'company_video'    => 'max:2048',


        ], [
            'overview_en.required'   => 'هذا الحقل مطلوب ',
            'overview_ar.required'   => 'هذا الحقل مطلوب ',
            'mission_en.required'    => 'هذا الحقل مطلوب ',
            'mission_ar.required'    => 'هذا الحقل مطلوب ',
            'vision_en.required'     => 'هذا الحقل مطلوب ',
            'vision_ar.required'     => 'هذا الحقل مطلوب ',
            'company_video.uploaded' => 'يجب الا يزيد حجم الفيديو عن 2 ميجا',

        ]);

        $request_data = $request->except('company_video');

        if ($request->company_video) {

                $videoName = time() . $request->file('company_video')->getClientOriginalName();

                $request_data['company_video'] =  $videoName ;

                $request->company_video->move(public_path('uploads/company/'), $videoName);

                $video_path = public_path() . '/uploads/company/' . $company->company_video;

                unlink($video_path);
            }

            $company->update($request_data);

        return redirect()->route('company.index')->with('flash_success', 'تم التعديل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
