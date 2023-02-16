<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationContent;

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
        $informationContents = InformationContent::get()->pluck('value', 'key')->toArray();

        return view('service', compact('informationContents'));
    }
}
