<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(){

        $parnters=Partner::orderBy('order', 'asc')->get();
        $feedBacks = Feedback::where('active', 1)->get();
        return view('web.partners',compact('parnters','feedBacks'));

    }

}
