<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check()) {
            if ($request->path() != 'admin/login') {
                return redirect()->guest('admin/login');
            }
        } else if (Auth::check()) {

            if (Auth::user()->is_admin != 1) {
                return redirect()->guest('/');
            }
        }
        return $next($request);
    }
}