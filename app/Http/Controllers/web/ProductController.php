<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product_category;
use App\Models\Product_type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){

        $fertilizer = Product_category::where('id', 2)->first();
        $products_Fertilizers = Product_type::where('category_id', 2)->get();
        return view('web.vertProduct',compact('fertilizer','products_Fertilizers'));

    }

    public function acide(){

        $pesticide = Product_category::where('id', 1)->first();
        $products_pesticides = Product_type::where('category_id', 1)->get();
        return view('web.pesticideProduct',compact('pesticide','products_pesticides'));

    }
    public function grow(){
        $grow = Product_category::where('id', 3)->first();
        $products_grow = Product_type::where('category_id', 3)->get();
        return view('web.growProduct',compact('grow','products_grow'));
    }
}
