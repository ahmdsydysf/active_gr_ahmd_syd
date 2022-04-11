<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index(){
        $services = Service::whereIN('service_type_id', [1,2])->first();
        return view('web.service',compact('services'));
    }
}
