<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\Feedback;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Team_member;
use App\Models\Why_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang as Lang;

class AboutController extends Controller
{
    protected $viewName = 'web.';
    const stage_1 = 'message.failed';
    public function index()
    {

        $whyRows = Why_us::limit(6)->get();

        $partners = Partner::orderBy('order', 'asc')->get();
        $feedBacks = Feedback::where('active', 1)->get();
        $contracts = Contract::where('active', 1)->orderBy('order', 'asc')->get();
        $teams= Team_member::where('active', 1)->orderBy('order', 'asc')->get();
        return view($this->viewName . 'about', compact('whyRows', 'feedBacks', 'partners', 'contracts','teams'));
    }

    public function sendMessage(Request $request)
    {
        Message::create($request->except('_token'));
        session()->flash('success', Lang::get('links.controller_message'));
        return redirect()->back()->with('flash_success', Lang::get('links.controller_message'));
    }
}
