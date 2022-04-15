<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Company_contact;
use Illuminate\Http\Request;

class CompanyContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_contact = Company_contact::all();

        return view('dash_site.company_contact.index')->with('row', $company_contact);
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
     * @param  \App\Models\Company_contact  $company_contact
     * @return \Illuminate\Http\Response
     */
    public function show(Company_contact $company_contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company_contact  $company_contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Company_contact $company_contact)
    {
        return view('dash_site.company_contact.edit')->with('row', $company_contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company_contact  $company_contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company_contact $company_contact)
    {
        $this->validate($request, [
            'address_en'  => 'required',
            'address_ar'  => 'required',
            'phones'      => 'required',
            'email'       => 'required',
            'fax'         => 'required',
            'whatsapp'    => 'required',
            'google_map'  => 'required',
            'website'     => 'required',
            'facebook'    => 'required',
            'twitter'     => 'required',
            'linkedin'    => 'required',
            'instagram'   => 'required',
            'youtube'     => 'required',
        ], [
            'address_en.required'   => 'هذا الحقل مطلوب ',
            'address_ar.required'   => 'هذا الحقل مطلوب ',
            'phones.required'       => 'هذا الحقل مطلوب ',
            'email.required'        => 'هذا الحقل مطلوب ',
            'fax.required'          => 'هذا الحقل مطلوب ',
            'whatsapp.required'     => 'هذا الحقل مطلوب ',
            'google_map.required'   => 'هذا الحقل مطلوب ',
            'website.required'      => 'هذا الحقل مطلوب ',
            'facebook.required'     => 'هذا الحقل مطلوب ',
            'twitter.required'      => 'هذا الحقل مطلوب ',
            'linkedin.required'     => 'هذا الحقل مطلوب ',
            'instagram.required'    => 'هذا الحقل مطلوب ',
            'youtube.required'      => 'هذا الحقل مطلوب ',
        ]);

        $request_data = $request->except('email', '_token');


        $request_data['email'] = $request->email;
        $company_contact->update($request_data);
        return redirect()->route('company_contact.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company_contact  $company_contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company_contact $company_contact)
    {
        //
    }
}
