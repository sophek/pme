<?php

namespace App\Http\Middleware;

use Closure;

class CheckTokenMiddleware
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
        if ($request->input('token') <= "abc") {
            return redirect('home');
        }
        
        return $next($request);
    }
}
