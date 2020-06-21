<?php

namespace App\Http\Middleware;

use Closure;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->api_password != env("API_PASSWORD",'FHqtWJlgQ35undK4VtYPEbTBIWi7USLo')){
            return response()->json(['message'=>'Unauthenticated check the Api Password and try Later!!']);
        }
        return $next($request);
    }
}
