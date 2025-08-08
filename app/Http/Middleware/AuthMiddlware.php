<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role): Response
    {

       if(!Auth::check()){
        return redirect()->route('login');
       }if(Auth::user()->role !==$role){
      abort(403,'unauthorized Action');
       }
        return $next($request);
    }
}
