<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blogs=Blog::where('active', 1)->orderBy('order', 'asc')->get();

        return view('web.blogs',compact('blogs'));

    }


    public function singleBlog($id){
        $blog=Blog::where('id', $id)->first();

        $blogs=Blog::where('active', 1)->orderBy('order', 'asc')->get();
        // dd($blog->slug);
        return view('web.single-blog',compact('blog','tags','blogs'))->withCanonical($blog->url);
    }
}
