<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blogs=Blog::where('active', 1)->orderBy('order', 'asc')->paginate(4);
        $latestPlogs = Blog::take(5)->orderBy("created_at", "desc")->get();
        return view('web.blogs',compact('blogs','latestPlogs'));

    }


    public function singleBlog($id){
        $blog=Blog::where('id', $id)->first();

        $blogs=Blog::where('active', 1)->orderBy('order', 'asc')->get();
        $latestPlogs = Blog::take(5)->orderBy("created_at", "desc")->get();
        // dd($blog->slug);
        return view('web.single-blog',compact('blog','blogs','latestPlogs'))->withCanonical($blog->url);
    }

    public function fetch_data(Request $request)
    {

        if ($request->ajax()) {
            $blogs = Blog::orderBy("created_at", "Desc")->paginate(4);

            return view('web.blogList', compact('blogs'))->render();
        }
    }
}
