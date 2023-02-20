<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $informationContents = $request->data_information_contents;
        $clients = $request->data_clients;
        $ourServices = $request->our_services;
        $teams = $request->teams;

        return view('welcome', compact('informationContents', 'clients', 'ourServices', 'teams'));
    }
}
