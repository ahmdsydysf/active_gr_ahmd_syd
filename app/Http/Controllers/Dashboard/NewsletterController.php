<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Newsletter::all();

        return view('dash_site.newsletter.index')->with('row', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.newsletter.create');
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
            'newsletter_date' => 'required',
            'email'  => 'required',

        ], [
            'newsletter_date.required'   => 'هذا الحقل مطلوب ',
            'email.required'    => 'هذا الحقل مطلوب ',

        ]);

        $request_data = $request->except('_token');




        Newsletter::create($request_data);

        return redirect()->route('newsletter.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $news = Newsletter::find($id);
        return view('dash_site.newsletter.edit')->with('row', $news);
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
            'newsletter_date' => 'required',
            'email'  => 'required',

        ], [
            'newsletter_date.required'   => 'هذا الحقل مطلوب ',
            'email.required'    => 'هذا الحقل مطلوب ',

        ]);
        $news = Newsletter::find($id);

        $request_data = $request->except('_token');

        $news->update($request_data);

        return redirect()->route('newsletter.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = Newsletter::find($id);

        $news->delete();
        return redirect()->route('newsletter.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
