<?php

namespace App\Http\Middleware;

use Closure;
use Session;
session_start();
class Quantri
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $username = auth()->user()->username;
        $checkUser = auth()->user()->idgroup;
        Session::put(["username"=>$username,'checkUser'=>$checkUser]);
     if(auth()->user()->idgroup == 1){

         return $next($request);
     }       
     return redirect('/')->with('loi','Bạn không có quyền admin');
}

}
