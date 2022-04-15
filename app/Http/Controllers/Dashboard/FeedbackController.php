<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feed = Feedback::orderBy('id', 'DESC')->paginate(5);

        return view('dash_site.feedback.index')->with('row', $feed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.feedback.create');
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
            'name_en'  => 'required',
            'name_ar'  => 'required',
            'position_en'   => 'required',
            'position_ar'   => 'required',
            'feedback_en'   => 'required',
            'feedback_ar'   => 'required',
            'image'     => 'image',
            'order'     => 'required',
            'active'     => 'required',
        ], [
            // 'blog_date.required'   => 'هذا الحقل مطلوب ',
            'name_en.required'    => 'هذا الحقل مطلوب ',
            'name_ar.required'    => 'هذا الحقل مطلوب ',
            'position_en.required'     => 'هذا الحقل مطلوب ',
            'position_ar.required'     => 'هذا الحقل مطلوب ',
            'feedback_en.required'     => 'هذا الحقل مطلوب ',
            'feedback_ar.required'     => 'هذا الحقل مطلوب ',
            'image.image'          => 'اختر صوره',
            'order.required'       => 'هذا الحقل مطلوب ',
            'active.required'       => 'هذا الحقل مطلوب ',
        ]);


        $request_data = $request->except('image', 'active', '_token');



        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            $request_data['image'] =  $imageName;

            $request->image->move(public_path('uploads/feedback/'), $imageName);
        } else {
            $request_data['image'] = 'default_1.png';
        }
        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }
        Feedback::create($request_data);

        return redirect()->route('feedback.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $feed = Feedback::find($id);
        return view('dash_site.feedback.edit')->with('row', $feed);
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

        $this->validate($request, [
            // 'blog_date' => 'required',
            'name_en'  => 'required',
            'name_ar'  => 'required',
            'position_en'   => 'required',
            'position_ar'   => 'required',
            'feedback_en'   => 'required',
            'feedback_ar'   => 'required',
            'image'     => 'image',
            'order'     => 'required',
            'active'     => 'required',
        ], [
            // 'blog_date.required'   => 'هذا الحقل مطلوب ',
            'name_en.required'    => 'هذا الحقل مطلوب ',
            'name_ar.required'    => 'هذا الحقل مطلوب ',
            'position_en.required'     => 'هذا الحقل مطلوب ',
            'position_ar.required'     => 'هذا الحقل مطلوب ',
            'feedback_en.required'     => 'هذا الحقل مطلوب ',
            'feedback_ar.required'     => 'هذا الحقل مطلوب ',
            'image.image'          => 'اختر صوره',
            'order.required'       => 'هذا الحقل مطلوب ',
            'active.required'       => 'هذا الحقل مطلوب ',
        ]);

        $request_data = $request->except('image', 'active', '_token');

        $feed = Feedback::find($id);
        if ($request->image) {

            if ($feed->image != 'default_1.png') {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/feedback/'), $imageName);

                $image_path = public_path() . '/uploads/feedback/' . $feed->image;

                unlink($image_path);
            } else {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/feedback/'), $imageName);
            }
        }


        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        $feed->update($request_data);

        return redirect()->route('feedback.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feed = Feedback::find($id);
        if ($feed->image != 'default_1.png') {
            $image_path = public_path() . '/uploads/feedback/' . $feed->image;
            unlink($image_path);
        }
        $feed->delete();
        return redirect()->route('feedback.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
