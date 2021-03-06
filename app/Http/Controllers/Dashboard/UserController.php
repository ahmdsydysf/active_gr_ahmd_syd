<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $users = User::all();


        return view('dash_site.users.index')->with("row", $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash_site.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'     => 'required|min:5',
        //     'email'    => 'required|email|unique:users',
        //     'password' => 'required|confirmed|min:6'
        // ]);

        $this->validate(
            $request,
            [
                'name'     => ['required', 'min:5'],
                'email'    => ['required', 'email', 'unique:users'],
                'password' => ['required', 'confirmed', 'min:6']
            ],
            [
                'name.required' => 'برجاء ادخال الاسم',
                'name.min' => 'برجاء ادخال الاسم لايقل عن 5',
                'email.required' => 'برجاء ادخال الايميل',
                'email.email' => 'صيغة الايميل غير صالحة',
                'email.unique' => 'هذا الايميل مستخدم من قبل',
                'password.min' => 'الباسوورد يجب الا يقل عن 6',
                'password.required' => 'يجب ادخال الباسوورد',
                'password.confirmed' => 'يجب تأكيد الباسوورد',
            ]
        );


        $request_data = $request->except('password', 'password_confirmation', '_token');

        $request_data['password'] = bcrypt($request->password);

        $newuser = User::create($request_data);

        // session()->flash('success', 'تمت الاضافة بنجاح');
        return redirect()->route('users.index')->with('flash_success', 'تم اضافة المستخدم بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dash_site.users.edit')->with('row', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate(
            $request,
            [
                'name'     => 'required|min:5',
                'email'    => 'required|email',
                'password' => 'required|confirmed|min:6'
            ],
            [
                'name.required' => 'برجاء ادخال الاسم',
                'name.min' => 'برجاء ادخال الاسم لايقل عن 5',
                'email.required' => 'برجاء ادخال الايميل',
                'email.email' => 'صيغة الايميل غير صالحة',
                'password.min' => 'الباسوورد يجب الا يقل عن 6',
                'password.required' => 'يجب ادخال الباسوورد',

            ]
        );

        $request_data = $request->except('password', '_token', 'password_confirmation');

        if (isset($request->password)) {
            $request_data['password'] = bcrypt($request->password);
        }

        $user->update($request_data);

        return redirect()->route('users.index')->with('flash_success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('flash_success', 'تم الحذف بنجاح');
    }
}
