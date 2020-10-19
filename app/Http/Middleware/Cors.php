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
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        //header('Access-Control-Allow-Origin: *,*');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Key, Authorization, X-Auth-Token, Country');
        header('Access-Control-Allow-Credentials: true');

        if($request->getMethod() == 'OPTIONS') {
            exit(0);
        }

        return $next($request);
    }
}
