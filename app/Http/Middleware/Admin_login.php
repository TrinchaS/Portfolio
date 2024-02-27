<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class Admin_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    //el argumento necesitaLogin ya no haria falta
    public function handle(Request $request, Closure $next,int $necesitaLogin = 0): Response
    {
        if($necesitaLogin){
            if(Auth::check()){
                return $next($request);
            }
            return Redirect::action([\App\Http\Controllers\AdminController::class,'login']);
        }
        
        if(!Auth::check())
            return $next($request);
        
        return Redirect::action([\App\Http\Controllers\AdminController::class,'index']);
        
    }
}
