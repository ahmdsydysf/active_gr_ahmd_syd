<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider_image;
use App\Models\Why_us;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $viewName = 'web.';

    public function index(){
        $homeSliders = Slider_image::where('active', 1)->orderBy('order', 'asc')->get();
        $singleSlide=Slider_image::where('active', 1)->orderBy('order', 'asc')->first();
        $whyRows=Why_us::limit(6)->get();
        $products = Product::where('active', 1)->get();

        return view($this->viewName .'home',compact('homeSliders','singleSlide','whyRows','products'));
    }
}
