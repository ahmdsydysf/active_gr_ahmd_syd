<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SliderImgs = Slider_image::all();
        return view('dash_site.image_slider.index')->with('row', $SliderImgs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.image_slider.create');
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
            'image'        => ['image'],
            'title_en'     => ['required'],
            'title_ar'     => ['required'],
            'text_en'      => ['required'],
            'text_ar'      => ['required'],
            'order'        => ['required']
        ], [
            'image.image'       => 'يجب اختيار صوره',
            'title_en.required' => 'هذا الحقل مطلوب ',
            'title_ar.required' => 'هذا الحقل مطلوب ',
            'text_en.required'  => 'هذا الحقل مطلوب ',
            'text_ar.required'  => 'هذا الحقل مطلوب ',
            'order.required'    => 'هذا الحقل مطلوب '
        ]);

        $request_data = $request->except('image', 'active');

        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            $request_data['image'] =  $imageName;

            $request->image->move(public_path('uploads/slider_images/'), $imageName);
        } else {
            $request_data['image'] = 'default_1.png';
        }

        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }


        Slider_image::create($request_data);

        // session()->flash('success', 'تمت الاضافة بنجاح');
        return redirect()->route('slider_images.index')->with('flash_success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function show(Slider_image $slider_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider_image $slider_image)
    {
        return view('dash_site.image_slider.edit')->with('row', $slider_image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider_image $slider_image)
    {
        $this->validate($request, [
            'image'        => ['image'],
            'title_en'     => ['required'],
            'title_ar'     => ['required'],
            'text_en'      => ['required'],
            'text_ar'      => ['required'],
            'order'        => ['required']
        ], [
            'image.image'       => 'يجب اختيار صوره',
            'title_en.required' => 'هذا الحقل مطلوب ',
            'title_ar.required' => 'هذا الحقل مطلوب ',
            'text_en.required'  => 'هذا الحقل مطلوب ',
            'text_ar.required'  => 'هذا الحقل مطلوب ',
            'order.required'    => 'هذا الحقل مطلوب '
        ]);

        $request_data = $request->except('image', 'active');

        if ($slider_image->image != 'default_1.png') {
            $image_path = public_path() . '/uploads/slider_images/' . $slider_image->image;
            unlink($image_path);
        }
        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            $request_data['image'] =  $imageName;

            $request->image->move(public_path('uploads/slider_images/'), $imageName);
        } else {
            $request_data['image'] = 'default_1.png';
        }



        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        $slider_image->update($request_data);

        return redirect()->route('slider_images.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider_image $slider_image)
    {



        if ($slider_image->image != 'default_1.png') {
            $image_path = public_path() . '/uploads/slider_images/' . $slider_image->image;
            unlink($image_path);
        }
        $slider_image->delete();
        return redirect()->route('slider_images.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
