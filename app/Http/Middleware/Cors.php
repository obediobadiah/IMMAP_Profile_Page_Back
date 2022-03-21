<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
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

        // header(" Access-Control-Allow-Origin: *");
        // $headers = [
        //     'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE ',
        //     'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Origin, Authorization',
        // ];
        // if ($request->getMethod() == "OPTIONS") {
        //     return response()->json('OK', 200, $headers);
        // }
        // $response = $next($request);
        // foreach($headers as $key=>$value){
        //     $response->header($key, $value);
        // }
        // return $response;

        $response = $next($request);
        $response->header('Access-Control-Allow-Origin','*');
        $response->header('Access-Control-Allow-Headers',$request->header('Access-Control-Request-Headers'));
        $response->header('Access-Control-Allow-Methods','POST, PUT, GET, DELETE, OPTIONS');
        return $response;
        
    }
}
