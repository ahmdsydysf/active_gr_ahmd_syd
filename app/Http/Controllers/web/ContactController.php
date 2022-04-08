<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $viewName = 'web.';
    public function index()
    {

        return view($this->viewName . 'contact');
    }

}
