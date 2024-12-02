<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Return a response instead of redirecting to the login page
            return response()->json(['message' => 'Unauthorized. Please log in first.'], 401);
        }

        return $next($request);
    }
}
