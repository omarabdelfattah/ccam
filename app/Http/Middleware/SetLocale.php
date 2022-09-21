<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, )
    {
        if(session()->has("lang_code")){
            App::setLocale(session()->get("lang_code"));
        }elseif(auth()->check() && auth()->user()->lang_code){

            session()->put("lang_code",auth()->user()->lang_code);
            App::setLocale(auth()->user()->lang_code);
            
        }
        return $next($request);
    }
}
