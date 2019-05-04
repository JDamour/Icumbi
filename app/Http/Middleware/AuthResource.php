<?php

namespace App\Http\Middleware;

use Closure;

class AuthResource
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        if ($request->route('houseShow/{id}')) {
            $house = House::find($request->route('houseShow/{id}'));
            if ($house && $house->user_id != auth()->user()->id) {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
