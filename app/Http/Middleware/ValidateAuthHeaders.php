<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateAuthHeaders
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

        if ($request->header('x-expivi-user') === 'Siamak' && $request->header('x-expivi-pass') === 'forFun') {
            return $next($request);
        }else{
            return new Response('unauthenticated :)', 403);
        }
    }
}
