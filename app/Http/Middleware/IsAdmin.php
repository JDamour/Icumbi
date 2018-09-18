<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
     if (!(Auth::check() && Auth::user()->isAdmin()))
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                //redirect user or guest to home page or something like that
                return redirect()->back();
            }
        }
        return $next($request);
    }
}
