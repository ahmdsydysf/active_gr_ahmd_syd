<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use App\Models\Gallary_category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){

        $galleries=Gallary::orderBy('order', 'asc')->get();
        $categories = Gallary_category::all();
                return view('web.galleries',compact('galleries','categories'));

    }
}
