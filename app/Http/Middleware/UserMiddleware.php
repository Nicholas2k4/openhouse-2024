<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $slug = $request->route('id');
        if (session('nrp') != null) {
            return $next($request);
        } else {
            session()->put('ukm_redirect_slug', $slug);
            return redirect()->route('user.login')->with('guest', 'You are not logged in !');
        }
    }
}
