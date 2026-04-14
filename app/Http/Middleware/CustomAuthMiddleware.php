<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check session
        if(!$request->session()->has('custom_user_id')){
            // not logged in and redirect to login page
            return redirect()->route('login')->with('error', 'Please login to access this page.');
        }
        return $next($request);
    }
}
