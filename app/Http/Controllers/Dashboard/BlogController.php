<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use File;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();

        return view('dash_site.blog.index')->with('row', $blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.blog.create');
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
            // 'blog_date' => 'required',
            'title_en'  => 'required',
            'title_ar'  => 'required',
            'text_en'   => 'required',
            'text_ar'   => 'required',
            'image'     => 'image',

        ], [
            // 'blog_date.required'   => 'هذا الحقل مطلوب ',
            'title_en.required'    => 'هذا الحقل مطلوب ',
            'title_ar.required'    => 'هذا الحقل مطلوب ',
            'text_en.required'     => 'هذا الحقل مطلوب ',
            'text_ar.required'     => 'هذا الحقل مطلوب ',
            'image.image'          => 'اختر صوره',

        ]);


        $request_data = $request->except('image', 'active', '_token');



        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            $request_data['image'] =  $imageName;

            $request->image->move(public_path('uploads/blogs/'), $imageName);
        } else {
            $request_data['image'] = 'default_blog.png';
        }
        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }
        Blog::create($request_data);

        return redirect()->route('blog.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $blog = Blog::find($id);
        return view('dash_site.blog.edit')->with('row', $blog);
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

        $blog = Blog::find($id);

        $this->validate($request, [
            // 'blog_date' => 'required',
            'title_en'  => 'required',
            'title_ar'  => 'required',
            'text_en'   => 'required',
            'text_ar'   => 'required',
            'image'     => 'image',

        ], [
            // 'blog_date.required'   => 'هذا الحقل مطلوب ',
            'title_en.required'    => 'هذا الحقل مطلوب ',
            'title_ar.required'    => 'هذا الحقل مطلوب ',
            'text_en.required'     => 'هذا الحقل مطلوب ',
            'text_ar.required'     => 'هذا الحقل مطلوب ',
            'image.image'          => 'اختر صوره',

        ]);
        $request_data = $request->except('image', 'active', '_token');


        if ($request->image) {

            if ($blog->image != 'default_blog.png') {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/blogs/'), $imageName);

                $image_path = public_path() . '/uploads/blogs/' . $blog->image;

                unlink($image_path);
            } else {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/blogs/'), $imageName);
            }
        }


        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        $blog->update($request_data);

        return redirect()->route('blog.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $row=Blog::where('id',$id)->first();
        // Delete File ..
        $file = $row->image;
        $file_name = public_path('uploads/blogs/' . $file);

        try {
            File::delete($file_name);


            $row->delete();
            return redirect()->back()->with('flash_success', 'تم الحذف بنجاح !');

        } catch (QueryException $q) {
            return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());

            // return redirect()->back()->with('flash_danger', 'هذه القضية مربوطه بجدول اخر ..لا يمكن المسح');
        }
    }


}
