<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contract = Contract::orderBy('id', 'DESC')->paginate(5);
        return view('dash_site.contract.index')->with('row', $contract);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.contract.create');
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
                'title_ar'    => ['required'],
                'title_en'    => ['required'],
                'desc_ar'    => ['required'],
                'desc_en'    => ['required'],
                'image'    => ['image'],
                'order'    => ['required'],
                'active'    => ['required'],
            ],
            [
                'title_ar.required' => 'هذا الحقل مطلوب',
                'title_en.required' => 'هذا الحقل مطلوب',
                'desc_ar.required' => 'هذا الحقل مطلوب',
                'desc_en.required' => 'هذا الحقل مطلوب',
                'image.image' => ' صوره هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
                'active.required' => 'هذا الحقل مطلوب',
            ]
        );



        $request_data = $request->except('image', 'active', '_token');

        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            $request_data['image'] =  $imageName;

            $request->image->move(public_path('uploads/contracts/'), $imageName);
        } else {
            $request_data['image'] = 'default_1.jpg';
        }

        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }


        Contract::create($request_data);

        return redirect()->route('contract.index')->with('flash_success', 'تم الاضافة بنجاح');
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
        $con = Contract::find($id);
        return view('dash_site.contract.edit', ['row' => $con]);
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
                'title_ar'    => ['required'],
                'title_en'    => ['required'],
                'desc_ar'    => ['required'],
                'desc_en'    => ['required'],
                'image'    => ['image'],
                'order'    => ['required'],
                'active'    => ['required'],
            ],
            [
                'title_ar.required' => 'هذا الحقل مطلوب',
                'title_en.required' => 'هذا الحقل مطلوب',
                'desc_ar.required' => 'هذا الحقل مطلوب',
                'desc_en.required' => 'هذا الحقل مطلوب',
                'image.image' => ' صوره هذا الحقل مطلوب',
                'order.required' => 'هذا الحقل مطلوب',
                'active.required' => 'هذا الحقل مطلوب',
            ]
        );

        $request_data = $request->except('image', 'active', '_token');

        $con = Contract::find($id);

        if ($request->image) {

            if ($con->image != 'default_1.jpg') {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/contracts/'), $imageName);

                $image_path = public_path() . '/uploads/contracts/' . $con->image;

                unlink($image_path);
            } else {
                $imageName = $request->image->hashName();

                $request_data['image'] =  $imageName;

                $request->image->move(public_path('uploads/contracts/'), $imageName);
            }
        }


        if ($request->has('active')) {
            $request_data['active'] = 1;
        } else {
            $request_data['active'] = 0;
        }

        $con->update($request_data);

        return redirect()->route('contract.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $con = Contract::find($id);
        if ($con->image != 'default_1.jpg') {
            $image_path = public_path() . '/uploads/contracts/' . $con->image;
            unlink($image_path);
        }
        $con->delete();
        return redirect()->route('contract.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
