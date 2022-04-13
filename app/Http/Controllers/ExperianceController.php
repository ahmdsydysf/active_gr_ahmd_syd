<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ExperianceController extends Controller
{
    public function index()
    {
        $allRows = Service::where('service_type_id', 3)->orderBy('id', 'DESC')->get();
        $services = Service::where('service_type_id', 3)->limit(6)->orderBy('id', 'DESC')->get();
        $allAdvices = Service::where('service_type_id', 4)->orderBy('id', 'DESC')->get();
        $advices = Service::where('service_type_id', 4)->limit(2)->orderBy('id', 'DESC')->get();
        return view('web.experience', compact('services', 'allRows', 'allAdvices', 'advices'));
    }

    public function loadMoreData(Request $request)
    {
        if ($request->id > 0) {
            //info($request->id);
            \Log::info('clicked');

            $services = Service::where('id', '<', $request->id)->where('service_type_id', 3)->limit(3)->orderBy('id', 'DESC')->get();
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

                $output .= '<div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3">
                <a class="play-btn video-view " href="' . $row->vedio . '"></a>



                <div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
                        src="' . asset('uploads/services/') . '/' . $row->image . '" alt="">
                </div>
                <div class="pro_title text-center">
                    <a href="#">' . $name . '</a>
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

            $advices = Service::where('id', '<', $request->id)->where('service_type_id', 4)->limit(3)->orderBy('id', 'DESC')->get();
        }
        $allAdvices = Service::where('service_type_id', 4)->orderBy('id', 'DESC')->get();
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
                $output .= '
                <div class="media post_item px-0 col-12 flex-wrap mb-5">
                <img src="' . asset('uploads/services/') . '/' . $row->image . '" alt="post"
                    class="col-12 col-md-6 col-lg-3 pr-0 pl-lg-5 pl-0">
                <div
                    class="media-body col-12 col-md-6 col-lg-9  align-self-start mt-3 mt-lg-0 p-0 p-lg-3">
                    <div class="col-12">
                        <h3><a href="#"> '. $name .'</a></h3>

                    </div>
                    <div class="col-12">
                        <p>' . $desc .'</p>
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
