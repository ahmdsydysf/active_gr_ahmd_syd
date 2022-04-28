<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use App\Models\Gallary_category;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use File;
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

        return view('dash_site.gallary.create')->with('categories', $gallary_cat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token','img','active']);

        if($request->get('type')==1){
            if ($request->hasFile('img')) {

                $attach_image = $request->file('img');

                $input['path'] = $this->UplaodImage($attach_image);

            }
        }else{

            $input['path'] =$request->get('image');
        }
        if($request->has('active')){
            $input['active'] = 1;
        }else{
            $input['active'] = 0;

        }

        Gallary::create($input);

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
        return view('dash_site.gallary.edit', ['row' => $gallary, 'categories' => $gallary_cat]);
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
        $row=Gallary::where('id',$id)->first();
        $input = $request->except(['_token','img','active']);

        if($row->type==1){
            if ($request->hasFile('img')) {

                $attach_image = $request->file('img');

                $input['path'] = $this->UplaodImage($attach_image);

            }
        }else{

            $input['path'] =$request->get('image');
        }

        if($request->has('active')){
            $input['active'] = 1;
        }else{
            $input['active'] = 0;

        }


    Gallary::findOrFail($id)->update($input);
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
        $row=Gallary::where('id',$id)->first();
        // Delete File ..
        $file = $row->image;
        $file_name = public_path('uploads/categories/' . $file);
        try {
            File::delete($file_name);
            $row->delete();
            return redirect()->back()->with('flash_success', 'تم الحذف بنجاح !');

        } catch (QueryException $q) {
            return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());

            // return redirect()->back()->with('flash_danger', 'هذه القضية مربوطه بجدول اخر ..لا يمكن المسح');
        }
    }


       /* uplaud image
     */
    public function UplaodImage($file_request)
    {
        //  This is Image Info..
        $file = $file_request;
        $name = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $size = $file->getSize();
        $path = $file->getRealPath();
        $mime = $file->getMimeType();

        // Rename The Image ..
        $imageName = $name;
        $uploadPath = public_path('uploads/galleries');

        // Move The image..
        $file->move($uploadPath, $imageName);

        return $imageName;
    }
}
