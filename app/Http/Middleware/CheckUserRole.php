<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (! $request->user() || $request->user()->role !== $role) {
            // Return a response with a message instead of redirecting
            return response('You have no permission to change data', 403);
        }

        return $next($request);
    }
}
