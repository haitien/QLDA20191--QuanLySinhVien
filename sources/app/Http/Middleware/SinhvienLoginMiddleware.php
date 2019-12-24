<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;


use Closure;

class SinhvienLoginMiddleware
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
            if(Auth::user()->chucVu == 0) {
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
