<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $allRows = Service::where('service_type_id', 1)->orderBy('id', 'DESC')->get();
        $services = Service::where('service_type_id', 1)->limit(6)->orderBy('id', 'DESC')->get();
        $allAdvices = Service::where('service_type_id', 2)->orderBy('id', 'DESC')->get();
        $advices = Service::where('service_type_id', 2)->limit(6)->orderBy('id', 'DESC')->get();
        return view('web.service', compact('services', 'allRows', 'allAdvices', 'advices'));
    }

    public function loadMoreData(Request $request)
    {
        if ($request->id > 0) {
            //info($request->id);
            \Log::info('clicked');

            $services = Service::where('id', '<', $request->id)->where('service_type_id', 1)->limit(3)->orderBy('id', 'DESC')->get();
        }
        $allRows = Service::orderBy('id', 'DESC')->get();
        $output = '';
        $last_id = '';

        if (!$services->isEmpty()) {

            foreach ($services as $row) {
                $name = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $name = $row->title_en;
                } else {
                    $name = $row->title_ar;
                };
                $desc = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $desc = $row->text_en;
                } else {
                    $desc = $row->text_ar;
                };
                $pdf = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $pdf = $row->pdf_en;
                } else {
                    $pdf = $row->pdf_ar;
                };
                $output .= '
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " >

                    <div>
              <img src="' . asset('uploads/services/') . '/' . $row->image . '" width="100%" height="100%">

                    </div>
                    <div class="bottom-lorem">
                        <div class="row">
                            <h3 class="col-12">' . $name . '
                            <a href="' . asset('uploads/services/') . '/' . $pdf . '" download="download"
                                    target="_blank"><i class="far fa-file-pdf dwn-icon"></i></a>
                              </h3>
                            <p class="col-12 text-right">' . $desc . '</p>
                        </div>
                    </div>
                </div>';

                $last_id = $row->id;

            }

        }

        // return $output;
        $arr = [
            'output' => $output,
            'last_id' => $last_id,
        ];
        // return json_encode($arr);
        return response()->json($arr);
    }

    public function loadMoreAdvices(Request $request)
    {
        if ($request->id > 0) {
            //info($request->id);
            \Log::info('clicked');

            $advices = Service::where('id', '<', $request->id)->where('service_type_id', 2)->limit(3)->orderBy('id', 'DESC')->get();
        }
        $allAdvices = Service::where('service_type_id', 2)->orderBy('id', 'DESC')->get();
        $output = '';
        $lastdevice_id = '';

        if (!$advices->isEmpty()) {

            foreach ($advices as $row) {
                $name = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $name = $row->title_en;
                } else {
                    $name = $row->title_ar;
                };
                $desc = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $desc = $row->text_en;
                } else {
                    $desc = $row->text_ar;
                };
                $pdf = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $pdf = $row->pdf_en;
                } else {
                    $pdf = $row->pdf_ar;
                };
                $output .= '
                    <div class="itemBox col-lg-4 col-md-6 col-12 p-3 " >

                    <div>
              <img src="' . asset('uploads/services/') . '/' . $row->image . '" width="100%" height="100%">

                    </div>
                    <div class="bottom-lorem">
                        <div class="row">
                            <h3 class="col-12">' . $name . '
                            <a href="' . asset('uploads/services/') . '/' . $pdf . '" download="download"
                                    target="_blank"><i class="far fa-file-pdf dwn-icon"></i></a>
 </h3>
                            <p class="col-12 text-right">' . $desc . '</p>
                        </div>
                    </div>
                </div>';

                $lastdevice_id = $row->id;

            }

        }

        $arr = [
            'output' => $output,
            'lastdevice_id' => $lastdevice_id,
        ];
        // return json_encode($arr);
        return response()->json($arr);
    }
}
