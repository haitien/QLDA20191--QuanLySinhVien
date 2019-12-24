<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;


use Closure;

class CanboLoginMiddleware
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
        if(Auth::check()) {
            if(Auth::user()->chucVu == 1) {
                return $next($request);   
            }
            else {
                return back();
            }
        }
        else {
            return redirect('dangnhap');
        }
    }
}
