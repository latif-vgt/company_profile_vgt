<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\InformationContent;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $clients = Client::get();
        $informationContents = InformationContent::get()->pluck('value', 'key')->toArray();

        return view('welcome', compact('informationContents', 'clients'));
    }
}
