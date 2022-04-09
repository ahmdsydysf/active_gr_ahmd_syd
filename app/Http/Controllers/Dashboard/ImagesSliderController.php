<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider_image;
use Illuminate\Http\Request;

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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider_image $slider_image)
    {
        //
    }
}
