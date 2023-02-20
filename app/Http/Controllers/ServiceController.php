<?php

namespace App\Http\Controllers;

use App\Models\OurService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $informationContents = $request->data_information_contents;
        $ourServices = OurService::get()->toArray();

        return view('service', compact('informationContents', 'ourServices'));
    }
}
