<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\InformationContent;

class CompanyProfileData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $clients = Client::where('enabled', 1)->get()->toArray();
        $informationContents = InformationContent::get()->pluck('value', 'key')->toArray();
        $request->data_information_contents = $informationContents;
        $request->data_clients = $clients;

        return $next($request);
    }
}
