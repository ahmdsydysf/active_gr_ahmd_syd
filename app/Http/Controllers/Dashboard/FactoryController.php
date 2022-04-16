<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factories = Factory::all();
        return view('dash_site.factory.index')->with('row', $factories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.factory.create');
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
                'name_ar'    => ['required'],
                'name_en'    => ['required']
            ],
            [
                'name_ar.required' => 'هذا الحقل مطلوب',
                'name_en.required' => 'هذا الحقل مطلوب'
            ]
        );

        Factory::create($request->except('_token'));

        return redirect()->route('factory.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $factory = Factory::find($id);
        return view('dash_site.factory.edit')->with('row', $factory);
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
                'name_ar'    => ['required'],
                'name_en'    => ['required']
            ],
            [
                'name_ar.required' => 'هذا الحقل مطلوب',
                'name_en.required' => 'هذا الحقل مطلوب'
            ]
        );
        $factory = Factory::find($id);

        $factory->update($request->except('_token'));
        return redirect()->route('factory.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factory = Factory::find($id);
        $factory->delete();
        return redirect()->route('factory.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
