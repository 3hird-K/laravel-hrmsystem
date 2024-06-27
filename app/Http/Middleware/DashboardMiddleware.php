<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DashboardMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect('/login')->with('error', 'This account has no access to Dashboard.');
        }

        return $next($request);
    }
    // public function handle($request, Closure $next)
    // {
    //     if ($request->user() && !$request->user()->isHrUser()) {
    //         return $next($request);
    //     }

    //     return redirect('/')->with('error', 'You do not have permission to access this page.');
    // }
}
