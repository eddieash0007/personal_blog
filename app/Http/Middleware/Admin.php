<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Alert;

class Admin
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
        if(!Auth::user()->admin)
        {
            Alert::alert()->info('Caution','You need to be an admin before performing such a function');

            return redirect()->back();
        }

        return $next($request);
    }
}
