<?php

namespace App\Http\Middleware;

use App\Models\HrUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    // public function handle(Request $request, Closure $next)
    // {
    //     if (!Auth::check() || Auth::user()->role !== 'user') {
    //         return redirect('/admin')->with('error', 'You have no access to register page. Login Admin');
    //     }


    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->isAdmin()) {
            return $next($request);
        }

        return redirect('/')->with('error', 'You have no access to this page. Login Admin.');
    }
}
