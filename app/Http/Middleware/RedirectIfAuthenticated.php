<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // $guardが指定されていない場合、認証チェックを行わせない
        if ($guard !== null && Auth::guard($guard)->check()) {
            return redirect('/');
        }

        if (Auth::guard($guard)->check()) {
            if($guard == 'webadmin'){ //←このif文を追加
                return redirect('/admin/home');
            }
            return redirect('/home');
        }

        return $next($request);
    }
}
