<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gallary_category;
use Illuminate\Http\Request;

class GallaryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallary_cat = Gallary_category::all();
        return view('dash_site.gallary_category.index')->with('row', $gallary_cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.gallary_category.create');
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
                'category_ar'    => ['required'],
                'category_en'    => ['required'],
                'description_ar'    => ['required'],
                'description_en'    => ['required'],
                'order'    => ['required'],
            ],
            [
                'category_ar.required' => 'هذا الحقل مطلوب',
                'category_en.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
            ]
        );

        Gallary_category::create($request->except('_token'));

        return redirect()->route('gallary_category.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $gallary_cat = Gallary_category::find($id);
        return view('dash_site.gallary_category.edit')->with('row', $gallary_cat);
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
                'category_ar'    => ['required'],
                'category_en'    => ['required'],
                'description_ar'    => ['required'],
                'description_en'    => ['required'],
                'order'    => ['required'],
            ],
            [
                'category_ar.required' => 'هذا الحقل مطلوب',
                'category_en.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
            ]
        );
        $gallary_cat = Gallary_category::find($id);

        $gallary_cat->update($request->except('_token'));
        return redirect()->route('gallary_category.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallary_cat = Gallary_category::find($id);
        $gallary_cat->delete();
        return redirect()->route('gallary_category.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
