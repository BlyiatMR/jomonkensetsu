<?php

namespace App\Http\Middleware;

use Closure;

class WhitespaceRemover
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
        foreach ($request->all() as $key => $value) {
            $request[$key] = trim(preg_replace('/\n\n+/', "\n\n", $request[$key]));
            $request[$key] = preg_replace('/\h\h+/', ' ', $request[$key]);
        }
        return $next($request);
    }
}
