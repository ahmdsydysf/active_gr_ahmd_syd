<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Factory;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('id', 'DESC')->paginate(5);
        return view('dash_site.product.index')->with('row', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pro_fac = Factory::all();
        $pro_par = Partner::all();
        $pro_typ = Product_type::all();

        return view('dash_site.product.create', ['pro_fac' => $pro_fac, 'pro_par' => $pro_par, 'pro_typ' => $pro_typ]);
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
                'pdf_en'             => ['required'],
                'pdf_ar'             => ['required'],
                'factory_id'         => ['required'],
                'partner_id'         => ['required'],
                'type_id'            => ['required'],
                'active'             => ['required'],
                'image'              => ['image'],
            ],
            [
                'name_en.required' => 'هذا الحقل مطلوب',
                'name_ar.required' => 'هذا الحقل مطلوب',
                'pdf_en.required' => 'هذا الحقل مطلوب',
                'pdf_ar.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'factory_id.required' => 'هذا الحقل مطلوب',
                'partner_id.required' => 'هذا الحقل مطلوب',
                'type_id.required' => 'هذا الحقل مطلوب',
                'active.required' => 'هذا الحقل مطلوب',
                'image.image' => ' مطلوب صورة'
            ]
        );


        $request_data = $request->except('image', 'active');

        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            $request_data['image'] =  $imageName;

            $request->image->move(public_path('uploads/products/'), $imageName);
        } else {
            $request_data['image'] = 'default_1.png';
        }

        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }


        Product::create($request_data);

        return redirect()->route('product.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $pro_fac = Factory::all();
        $pro_par = Partner::all();
        $pro_typ = Product_type::all();

        return view('dash_site.product.edit', ['row' => $prod, 'pro_fac' => $pro_fac, 'pro_par' => $pro_par, 'pro_typ' => $pro_typ]);
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
                'pdf_en'             => ['required'],
                'pdf_ar'             => ['required'],
                'factory_id'         => ['required'],
                'partner_id'         => ['required'],
                'type_id'            => ['required'],
                'active'             => ['required'],
                'image'              => ['image'],
            ],
            [
                'name_en.required' => 'هذا الحقل مطلوب',
                'name_ar.required' => 'هذا الحقل مطلوب',
                'pdf_en.required' => 'هذا الحقل مطلوب',
                'pdf_ar.required' => 'هذا الحقل مطلوب',
                'description_en.required' => 'هذا الحقل مطلوب',
                'description_ar.required' => 'هذا الحقل مطلوب',
                'factory_id.required' => 'هذا الحقل مطلوب',
                'partner_id.required' => 'هذا الحقل مطلوب',
                'type_id.required' => 'هذا الحقل مطلوب',
                'active.required' => 'هذا الحقل مطلوب',
                'image.image' => ' مطلوب صورة'
            ]
        );

        $request_data = $request->except('image', 'active', '_token');

        $pro = Product::find($id);

        if ($request->image) {

            if ($pro->image != 'default_1.png') {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/products/'), $imageName);

                $image_path = public_path() . '/uploads/products/' . $pro->image;

                unlink($image_path);
            } else {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/products/'), $imageName);
            }
        }


        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        $pro->update($request_data);

        return redirect()->route('product.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $prod = Product::find($id);
        if ($prod->image != 'default_1.png') {
            $image_path = public_path() . '/uploads/products/' . $prod->image;
            unlink($image_path);
        }
        $prod->delete();
        return redirect()->route('product.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
