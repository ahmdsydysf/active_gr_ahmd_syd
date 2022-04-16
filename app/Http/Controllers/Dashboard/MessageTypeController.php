<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message_type;
use Illuminate\Http\Request;

class MessageTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msg_typs = Message_type::all();

        return view('dash_site.message_type.index')->with('row', $msg_typs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.message_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'message_type_ar'    => ['required'],
                'message_type_en'    => ['required']
            ],
            [
                'message_type_ar.required' => 'هذا الحقل مطلوب',
                'message_type_en.required' => 'هذا الحقل مطلوب'
            ]
        );

        Message_type::create($request->except('_token'));

        return redirect()->route('message_type.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $msgTyp = Message_type::find($id);
        return view('dash_site.message_type.edit')->with('row', $msgTyp);
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
        $this->validate(
            $request,
            [
                'message_type_ar'    => ['required'],
                'message_type_en'    => ['required']
            ],
            [
                'message_type_ar.required' => 'هذا الحقل مطلوب',
                'message_type_en.required' => 'هذا الحقل مطلوب'
            ]
        );

        $msgTyp = Message_type::find($id);

        $msgTyp->update($request->except('_token'));
        return redirect()->route('message_type.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msgTyp = Message_type::find($id);
        $msgTyp->delete();
        return redirect()->route('message_type.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
