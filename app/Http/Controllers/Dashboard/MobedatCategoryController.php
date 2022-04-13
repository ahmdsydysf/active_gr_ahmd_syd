<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product_category;
use App\Models\Product_type;
use Illuminate\Http\Request;

class MobedatCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mobedat = Product_type::where('category_id', 1)->orderBy('id', 'DESC')->paginate(5);
        return view('dash_site.product_type.mobedat.index')->with('row', $mobedat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_pro_cat = Product_category::all();
        return view('dash_site.product_type.mobedat.create')->with('all_pro_cat', $all_pro_cat);
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
                'type_en'           => ['required'],
                'type_ar'           => ['required'],
                'description_en'    => ['required'],
                'description_ar'    => ['required'],
                'category_id'       => ['required'],
                'order'             => ['required'],
                'image'             => ['image'],
            ],
            [
                'type_en.required' => 'هذا الحقل مطلوب',
                'type_ar.required' => 'هذا الحقل مطلوب',
                'category_id.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
                'image.image' => ' مطلوب صورة'
            ]
        );

        $request_data = $request->except('image', '_token');

        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            $request_data['image'] =  $imageName;

            $request->image->move(public_path('uploads/product_types/'), $imageName);
        } else {
            $request_data['image'] = 'default_1.png';
        }



        Product_type::create($request_data);

        return redirect()->route('mobedat_category.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $mobedat = Product_type::find($id);
        $all_pro_cat = Product_category::all();
        return view('dash_site.product_type.mobedat.edit', ['row' => $mobedat, 'all_pro_cat' => $all_pro_cat]);
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
        $product_type = Product_type::find($id);

        $this->validate(
            $request,
            [
                'type_en'           => ['required'],
                'type_ar'           => ['required'],
                'description_en'    => ['required'],
                'description_ar'    => ['required'],
                'category_id'       => ['required'],
                'order'             => ['required'],
                'image'             => ['image'],
            ],
            [
                'type_en.required' => 'هذا الحقل مطلوب',
                'type_ar.required' => 'هذا الحقل مطلوب',
                'category_id.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
                'image.image' => ' مطلوب صورة'
            ]
        );

        $request_data = $request->except('image', '_token');


        if ($request->image) {

            if ($product_type->image != 'default_1.png') {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/product_types/'), $imageName);

                $image_path = public_path() . '/uploads/product_types/' . $product_type->image;

                unlink($image_path);
            } else {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/product_types/'), $imageName);
            }
        }

        $product_type->update($request_data);

        return redirect()->route('mobedat_category.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_type = Product_type::find($id);
        if ($product_type->image != 'default_1.png') {
            $image_path = public_path() . '/uploads/product_types/' . $product_type->image;
            unlink($image_path);
        }
        $product_type->delete();
        return redirect()->route('mobedat_category.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
