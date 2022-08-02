<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAid
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
        $aidvalue = $request->session()->get('adminid', 'noaccess');

        if(Auth::user()->role===null){
            return redirect('home');
        }elseif($aidvalue == 'noaccess') {
            return redirect('confirmuser');
        }else{
        return $next($request);
        }
    }
}
