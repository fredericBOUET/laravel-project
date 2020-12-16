<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermissionUser
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
        // TODO: Add your logic here.
        $user_role = session()->get('key');

        if ($user_role == 'sub') {
            return $next($request);
        }else{
            return redirect('/login');
        }

    }
}