<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use App\Models\Gallary_category;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallary = Gallary::all();
        return view('dash_site.gallary.index')->with('row', $gallary);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallary_cat = Gallary_category::all();
        return view('dash_site.gallary.create')->with('gallary_cat', $gallary_cat);
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
                'path'    => ['required'],
                'type'    => ['required'],
                'category_id'    => ['required'],
                'description_en'    => ['required'],
                'description_ar'    => ['required'],
                'order'    => ['required'],
                'active'    => ['required'],
            ],
            [
                'path.required' => 'هذا الحقل مطلوب',
                'type.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'category_id.required' => 'هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
                'active.required' => 'هذا الحقل مطلوب',
            ]
        );


        $request_data = $request->except('_token', 'active');


        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }


        Gallary::create($request_data);

        return redirect()->route('gallary.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $gallary = Gallary::find($id);
        $gallary_cat = Gallary_category::all();
        return view('dash_site.gallary.edit', ['row' => $gallary, 'gallary_cat' => $gallary_cat]);
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
                'path'    => ['required'],
                'type'    => ['required'],
                'category_id'    => ['required'],
                'description_en'    => ['required'],
                'description_ar'    => ['required'],
                'order'    => ['required'],
                'active'    => ['required'],
            ],
            [
                'path.required' => 'هذا الحقل مطلوب',
                'type.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'category_id.required' => 'هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
                'active.required' => 'هذا الحقل مطلوب',
            ]
        );


        $request_data = $request->except('_token', 'active');

        $gallary = Gallary::find($id);

        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        $gallary->update($request_data);

        return redirect()->route('gallary.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallary = Gallary::find($id);

        $gallary->delete();
        return redirect()->route('gallary.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
