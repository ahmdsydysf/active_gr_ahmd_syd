<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Factory;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Product_category;
use App\Models\Product_type;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use File;

class MonzmatCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asmeda = Product_type::where('category_id', 3)->pluck('id');
        $products=Product::whereIn('type_id',$asmeda)->get();
        return view('dash_site.product_type.monzmat.index')->with('row', $products);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_pro_cat = Product_category::all();
        $pro_fac = Factory::all();
        $pro_par = Partner::all();
        $pro_typ = Product_type::where('category_id',2)->get();
        return view('dash_site.product_type.monzmat.create')->with( ['pro_fac' => $pro_fac, 'pro_par' => $pro_par, 'pro_typ' => $pro_typ, 'all_pro_cat'=> $all_pro_cat]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token', 'img', 'active', 'pdf_en', 'pdf_ar']);
        if ($request->hasFile('img')) {
            $attach_image = $request->file('img');

            $input['image'] = $this->UplaodImage($attach_image);

        }
        if ($request->hasFile('pdf_en')) {
            $attach_pdf_en = $request->file('pdf_en');

            $input['pdf_en'] = $this->UplaodImage($attach_pdf_en);

        }
        if ($request->hasFile('pdf_ar')) {
            $attach_pdf_ar = $request->file('pdf_ar');

            $input['pdf_ar'] = $this->UplaodImage($attach_pdf_ar);

        }

        if ($request->has('active')) {
            $input['active'] = 1;
        } else {
            $input['active'] = 0;

        }

        Product::create($input);

        return redirect()->route('monzmat_category.index')->with('flash_success', 'تم الاضافة بنجاح');
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
       $prod = Product::find($id);
        $all_pro_cat = Product_category::all();
        $pro_fac = Factory::all();
        $pro_par = Partner::all();
        $pro_typ = Product_type::where('category_id',1)->get();
        return view('dash_site.product_type.monzmat.edit',  ['row' => $prod,'pro_fac' => $pro_fac, 'pro_par' => $pro_par, 'pro_typ' => $pro_typ, 'all_pro_cat'=> $all_pro_cat]);


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
        $input = $request->except(['_token', 'img', 'active', 'pdf_en', 'pdf_ar']);
        if ($request->hasFile('img')) {
            $attach_image = $request->file('img');

            $input['image'] = $this->UplaodImage($attach_image);

        }
        if ($request->hasFile('pdf_en')) {
            $attach_pdf_en = $request->file('pdf_en');

            $input['pdf_en'] = $this->UplaodImage($attach_pdf_en);

        }
        if ($request->hasFile('pdf_ar')) {
            $attach_pdf_ar = $request->file('pdf_ar');

            $input['pdf_ar'] = $this->UplaodImage($attach_pdf_ar);

        }

        if ($request->has('active')) {
            $input['active'] = 1;
        } else {
            $input['active'] = 0;

        }

        Product::findOrFail($id)->update($input);

        return redirect()->route('monzmat_category.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $row=Product::where('id',$id)->first();
        // Delete File ..
        $file = $row->image;
        $file_name = public_path('uploads/products/' . $file);
        $file1 = $row->pdf_en;
        $file_name1 = public_path('uploads/products/' . $file);
        $file2 = $row->pdf_ar;
        $file_name2 = public_path('uploads/products/' . $file);
        try {
            File::delete($file_name);
            File::delete($file_name1);
            File::delete($file_name2);

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
        $uploadPath = public_path('uploads/products');

        // Move The image..
        $file->move($uploadPath, $imageName);

        return $imageName;
    }
}
