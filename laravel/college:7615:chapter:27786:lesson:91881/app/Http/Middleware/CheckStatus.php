<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckStatus
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
        $status = request()->headers->get('status');
        if ($status == 'banned') {
            return response()->json(['error' => 'You are banned'], 401);
        }
        return $next($request);
    }
}
