<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Team_member;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use File;
class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team_member::all();

        return view('dash_site.team_member.index')->with('row', $team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.team_member.create');
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

            'name_en'   => 'required',
            'name_ar'   => 'required',
            'position_en'   => 'required',
            'position_ar'   => 'required',
            'active'   => 'required',
            'order'     => 'required',
        ], [
            // 'blog_date.required'   => 'هذا الحقل مطلوب ',
            'name_en.required'    => 'هذا الحقل مطلوب ',
            'name_ar.required'    => 'هذا الحقل مطلوب ',
            'position_ar.required'     => 'هذا الحقل مطلوب ',
            'position_en.required'     => 'هذا الحقل مطلوب ',
            'active.required'     => 'هذا الحقل مطلوب ',
            'order.required'     => 'هذا الحقل مطلوب ',

        ]);


        $request_data = $request->except('active', '_token','img');
        if ($request->hasFile('img')) {
            $attach_image = $request->file('img');

            $request_data['image'] = $this->UplaodImage($attach_image);

        }
        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        Team_member::create($request_data);

        return redirect()->route('team_member.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $team = Team_member::find($id);
        return view('dash_site.team_member.edit')->with('row', $team);
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

            'name_en'   => 'required',
            'name_ar'   => 'required',
            'position_en'   => 'required',
            'position_ar'   => 'required',
            'active'   => 'required',
            'order'     => 'required',
        ], [
            // 'blog_date.required'   => 'هذا الحقل مطلوب ',
            'name_en.required'    => 'هذا الحقل مطلوب ',
            'name_ar.required'    => 'هذا الحقل مطلوب ',
            'position_ar.required'     => 'هذا الحقل مطلوب ',
            'position_en.required'     => 'هذا الحقل مطلوب ',
            'active.required'     => 'هذا الحقل مطلوب ',
            'order.required'     => 'هذا الحقل مطلوب ',

        ]);

        $team = Team_member::find($id);

        $request_data = $request->except('active', '_token','img');

        if ($request->hasFile('img')) {
            $attach_image = $request->file('img');

            $request_data['image'] = $this->UplaodImage($attach_image);

        }
        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        $team->update($request_data);

        return redirect()->route('team_member.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Team_member::find($id);
        $file = $row->image;
        $file_name = public_path('uploads/teams/' . $file);
        try {
            File::delete($file_name);
            $row->delete();
            return redirect()->back()->with('flash_success', 'تم الحذف بنجاح !');

        } catch (QueryException $q) {
            return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());

            // return redirect()->back()->with('flash_danger', 'هذه القضية مربوطه بجدول اخر ..لا يمكن المسح');
        }
    }


           /* uplaud image
     */
    public function UplaodImage($file_request)
    {
        //  This is Image Info..
        $file = $file_request;
        $name = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $size = $file->getSize();
        $path = $file->getRealPath();
        $mime = $file->getMimeType();

        // Rename The Image ..
        $imageName = $name;
        $uploadPath = public_path('uploads/teams');

        // Move The image..
        $file->move($uploadPath, $imageName);

        return $imageName;
    }
}
