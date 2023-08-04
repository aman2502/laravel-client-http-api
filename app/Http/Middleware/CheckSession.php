<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(session('token'));
        // if($request->getPathInfo() === '/login-page'){
        //     if(Session::has('token')){
        //         return redirect()->back();
        //     }
        //     else{
        //         return redirect('login-page');
        //     }
        // }
        // else{
            if(Session::has('token')){
                return $next($request);
            }
            else{
                return redirect('login-page');
            }
        // }
        
        
    }
}
