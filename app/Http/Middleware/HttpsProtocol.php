<?php

namespace App\Http\Middleware;

use Closure;

class HttpsProtocol
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
<<<<<<< HEAD
        return $next($request);
=======
        if (!$request->secure() && env('APP_ENV') === 'local') {
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
        //return $next($request);
>>>>>>> a792a1d851fe240b1e96f596fa7e61ba136de41a
    }
}