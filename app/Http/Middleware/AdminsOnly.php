<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Allow a single user access to a page
        if(auth()->user()?->username !== 'sammy'){
            abort(Response::HTTP_FORBIDDEN);
        }
        
        return $next($request);
    }
}
