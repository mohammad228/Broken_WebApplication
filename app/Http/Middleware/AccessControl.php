<?php

namespace App\Http\Middleware;

use Closure;

class AccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($request->hasSession()) {

            if (!$request->session()->exists('login')) {
                return redirect('/login');
            }
        }

        return $next($request);
    }
}
