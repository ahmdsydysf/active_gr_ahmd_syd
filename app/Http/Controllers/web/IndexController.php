<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Partner;
use App\Models\Product_category;
use App\Models\Product_type;
use App\Models\Slider_image;
use App\Models\Why_us;

class IndexController extends Controller
{
    protected $viewName = 'web.';

    public function index()
    {
        $homeSliders = Slider_image::where('active', 1)->orderBy('order', 'asc')->get();
        $singleSlide = Slider_image::where('active', 1)->orderBy('order', 'asc')->first();
        $whyRows = Why_us::limit(6)->get();
        $products_Fertilizers = Product_type::where('category_id', 2)->get();
        $products_pesticides = Product_type::where('category_id', 1)->get();
        $products_growth = Product_type::where('category_id', 3)->get();
        $fertilizer = Product_category::where('id', 2)->first();
        $pesticide = Product_category::where('id', 1)->first();
        $partners = Partner::orderBy('order', 'asc')->get();
        $feedBacks = Feedback::where('active', 1)->get();
        $blogs = Blog::where('active', 1)->orderBy('order', 'asc')->get();

        return view($this->viewName . 'home', compact('homeSliders', 'singleSlide', 'whyRows', 'products_Fertilizers'
            , 'fertilizer', 'pesticide', 'products_pesticides', 'products_growth', 'feedBacks', 'blogs', 'partners'));
    }
}
